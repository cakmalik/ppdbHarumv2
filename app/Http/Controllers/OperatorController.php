<?php

namespace App\Http\Controllers;
use App\Models\Size;
use App\Models\setup;
use App\Models\Member;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Setup\Uniform;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Students\Fund_category;
use Illuminate\Support\Facades\Redirect;

class OperatorController extends Controller
{
    public function showStudents()
    {
        $students=Student::latest()->paginate(15);

        return view('op.students',compact('students'));
    }
    public function confirmPage()
    {
        $students = Student::where('status',1)->paginate(30);
        return view('op.confirmPage',compact('students')); 
    }
   
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
        alert()->success('Menerima siswa','Berhasil');
        return back();
    }
    public function confirmReject(Request $request)
    {
       $request->validate([
            'status'=>'required'
        ]);
        Student::whereIn('id',$request->status)->update(['status'=>3]);
        alert()->success('Menolak siswa','Berhasil');
        return back();
    }
    public function confirmed()
    {
        $students = Student::where('status','!=',1)->orderBy('status','asc')->paginate(15);
        return view('op.confirmed',compact('students'));
    }
    public function uniformTable()
    {
        $uniforms=Uniform::get();
        return view('op.uniformTable',compact('uniforms'));
    }
    public function opSet()
    {
        $pesanwa = setup::where('name','pesan_wa')->first();
        return view('op.opset',compact('pesanwa'));
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
        return view('op.fund.fund_categories',compact('funds'));
    }
    public function editFund($id)
    {
        $fund = Fund_category::where('id',$id)->first();
        return view('op.fund.edit',compact('fund'));
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
        return view('op.fund.apply',compact('students','funds'));
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
        // dd($cek_du);
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
        return view('op.table_fitting', compact('sizes'));
    }
    public function manageSchedule()
    {
        $students = Student::paginate(30);
        return view('op.manage_schedule',compact('students'));   
    }
}
