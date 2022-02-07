<?php

namespace App\Http\Controllers;
use App\Models\Size;
use App\Models\setup;
use App\Models\Member;
use App\Models\Schedule;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Setup\Uniform;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Students\Fund_category;
use Carbon\Carbon;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;


class OperatorController extends Controller
{
    public function showStudents()
    {
        $students=Student::latest()->paginate(1000);
        
        return view('operator.students',compact('students'));
    }
    public function confirmPage()
    {
        $students = Student::where('status',1)->paginate(1000);
        return view('operator.confirmPage',compact('students')); 
    }
    // mengubah siswa awal menjadi di terima
    public function confirmAcc(Request $request)
    {
        $request->validate([
            'status'=>'required'
        ]);
        //cek kode token student
        $token = Student::whereIn('id',$request->status)->first()->token;
        // update di members table level ke accept
        Member::where('email', $token)->update(['level'=>'accept']);
        // update status menjadi 2/diterima
        Student::whereIn('id',$request->status)->update(['status'=>2]);
        return redirect()->back()->with(['success' => 'Berhasil diterima']);
    }
    public function confirmReject(Request $request)
    {
        $request->validate([
            'status'=>'required'
        ]);
        //cek kode token student
        $token = Student::whereIn('id',$request->status)->first()->token;
        // update di members table level ke accept
        Member::where('email', $token)->update(['level'=>'reject']);
        Student::whereIn('id',$request->status)->update(['status'=>3]);
        return view('member.maaf');
    }
    public function confirmed()
    {
        $students = Student::where('status','!=',1)->orderBy('status','asc')->paginate(1000);
        return view('operator.confirmed',compact('students'));
    }
    public function uniformTable()
    {
        $uniforms=Uniform::get();
        return view('operator.uniformTable',compact('uniforms'));
    }
    public function opSet()
    {
        $pesanwa = setup::where('name','pesan_wa')->first();
        return view('operator.opset',compact('pesanwa'));
    }
    public function setwa(Request $request)
    {
        DB::table('setups')
        ->where('name', 'pesan_wa')
        ->update(['value' => $request->value]);
        return back();
    }
    public function fundCategories()
    {
        $funds = Fund_category::orderBy('id','asc')->get();
        return view('operator.fund.fund_categories',compact('funds'));
    }
    public function editFund($id)
    {
        $fund = Fund_category::where('id',$id)->first();
        return view('operator.fund.edit',compact('fund'));
    }
    public function updateFund(Request $request,$id)
    {
        $request->validate([
            'gender'=>'required',
            'name'=>'required',
            'gedung'=>'required',
            'perpustakaan'=>'required',
            'kegiatan'=>'required',
            'bukumedia'=>'required',
            'seragam'=>'required',
            'jilbab'=>'required',
            'ipp'=>'required',
        ]);
        Fund_category::find($id)->update($request->all());
        alert()->success('Berhasil', 'Update kategory');
        return redirect()->route('fund');
    }
    public function storeFund(Request $request)
    {
        $request->validate([
            'gender'=>'required',
            'name'=>'required',
            'gedung'=>'required',
            'perpustakaan'=>'required',
            'kegiatan'=>'required',
            'bukumedia'=>'required',
            'seragam'=>'required',
            'jilbab'=>'required',
            'ipp'=>'required',
        ]);
        Fund_category::create($request->all());
        alert()->success('Berhasil', "kategori $request->name ditambah");
        return back();
    }
    public function deleteFund($id)
    {
        Fund_category::find($id)->delete();
        alert()->success('Menghapus kategori','Berhasil');
        return back();
    }
    public function applyDaftarUlang()
    {
        $funds = Fund_category::orderBy('id','asc')->get();
        $students = Student::where('status',2)->orderBy('status','asc')->paginate(15);
        return view('operator.fund.apply',compact('students','funds'));
    }
    public function postApplyDaftarulang(Request $request,$id)
    {
        if ($request->daftarulang) {
            Student::find($id)->update(['daftarulang'=>$request->daftarulang]);
            alert()->success('Yeee', 'Berhasil');
        }else{
            alert()->error('Kategori belum dipilih', 'MAAF !');
        }
        
        return back();
    }
    public function lunasDaftarulang($id)
    {
        $cek_du = Student::where('id',$id)->first();
        if($cek_du->daftarulang!==null){
            Student::find($id)->update(['telahbayar'=>1]);
            alert()->success('Fitting seragam aktif','Berhasil membayar');
            return back();
        }else{
            alert()->error('Tentukan dulu daftar ulang','GAGAL');
            return back();
        }
        
    }
    public function gantiTolak($id)
    {
        Student::find($id)->update(['status'=>3]);
        alert()->success('Data diganti tolak','Berhasil');
        return back();
    }
    public function gantiTerima($id)
    {
        Student::find($id)->update(['status'=>2]);
        alert()->success('Data diganti terima','Berhasil');
        return back();
    }
    public function tableFitting()
    {
        $sizes = Size::latest()->paginate(15);
        return view('operator.table_fitting', compact('sizes'));
    }
    public function manageSchedule()
    {
        $students = Student::paginate(1000);
        return view('operator.manage_schedule',compact('students'));   
    }
    public function postSchedule(Request $request)
    {
        $request->validate([
            'tanggal'=>'required',
            'jam'=>'required',
            // 'nilai'=>'required|unique:schedules,student_id',
            'nilai'=>'required',
        ],
        [
            'tanggal.required'=>'Pastikan tanggal ditentukan',
            'jam.required'=>'Pastikan jam ditentukan',
            // 'nilai.unique'=>'Ada siswa yang sudah terjadwal',
            'nilai.required'=>'Pilih siswa'
            ]
        );
        $students = $request->nilai;
        foreach($students as $std){
            Schedule::create([
                'student_id'=>$std,
                'tanggal'=>$request->tanggal,
                'jam'=>$request->jam,
            ]);
        }
        alert()->success('Waktu dan Tanggal telah diatur', 'Berhasil');
        return back();
    }
    public function editjadwal($id)
    {
        $student = Student::find($id)->first();
        return view('operator.editjadwal',compact('student'));
    }
    public function updatejadwal(Request $request,$id)
    {
        $request->validate([
            'tanggal'=>'required',
            'jam'=>'required',
        ]);
        Schedule::where('student_id',$id)->update(['tanggal'=>$request->tanggal,'jam'=>$request->jam]);
        alert()->success('Tanggal & Jam diganti','Berhasil');
        return back();
    }
    public function kirimWa($id)
    {  
        $CS = Student::where('id',$id)->first();
        $number = $CS->mom_phone;
        
        $date = Carbon::parse($CS->jadwal->tanggal)->locale('id');
        $date->settings(['formatFunction' => 'translatedFormat']);
        $tgl = $date->format('l, j F Y');
        $jam = $CS->jadwal->jam;
        $message = "Assalamualaikum wr wb. Mengingatkan kepada Ayah/Bunda dan Ananda : *".$CS->full_name."* untuk hadir mengikuti Psikotes di SDIT Harapan Umat Jember pada *".$tgl."*, Jam : *".$jam."* Terima kasih atas perhatiannya. Waasalamualaikum wrb wb";
        $client = new Client();
        try {
            $res = $client->post('http://sister.sditharum.id:7000/send-message', [
                
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'form_params' => [
                    // 'number' => sprintf('%08d', 85233002598),
                    'number' => $number,
                    'message' => $message
                    ]
                ]);
                $res = json_decode($res->getBody()->getContents(), true);
                return back()->with('success','Terkirim');
            }
            catch (Exception $e) {
                $response = $e->getresponse();
                $result =  json_decode($response->getBody()->getContents());
                return response()->json(['data' => $result]);
            }
            
        }
    }
    