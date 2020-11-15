<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Setup\Income;
use Illuminate\Http\Request;
use App\Exports\MemberExport;
use App\Models\setup;
use App\Models\Setup\Uniform;
use App\Models\Size;
use App\Models\Students\Fund_category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class MemberController extends Controller
{
    function exportExcel()
    {
        return Excel::download(new MemberExport, 'Member.xlsx');
    }
    public function index()
    {
        $token = Auth::guard('member')->user()->email;
        $data = Student::where('token',$token)->first();
        if ($data->status==1) {
            $pesan = setup::where('name','pesan_siswa_baru')->first();
            $ga = Income::where('category', $data->dad_income)->first()->amount;
            $gb = Income::where('category', $data->mom_income)->first()->amount;
            return view('member.data', [
                'data'=>$data,
                'ga'=>$ga,
                'gb'=>$gb,
                'role'=>0,
                'pesan'=>$pesan,
            ]);
        }elseif($data->status==3){
            $full_name = $data->full_name;
            $nama = $data->nick_name;
            return view('member.maaf',compact('full_name','nama'));
        }else{
            $full_name = $data->full_name;
            return view('member.selamat',compact('full_name'));
        }
    }
    public function showTable()
    {
        $students = Student::latest()->paginate(15);
        return view('op.students',compact('students'));
    }
    
    public function accept()
    {
        $token = Auth::guard('member')->user()->email;
        $data = Student::where('token',$token)->first();
        $full_name = $data->full_name;
        return view('member.selamat',compact('full_name'));
    }
    public function roleDiterima()
    {
        $role = 4;
        return view('member.stepwizard',compact('role'));
    }

    public function cekData()
    {
        $token = Auth::guard('member')->user()->email; 
        $student = Student::where('token',$token)->first();
        $role = 4;
        return view('member.show',compact('student','role'));
    }
    public function infoDaftarUlang()
    {
        $token = Auth::guard('member')->user()->email; 
        $student = Student::where('token',$token)->first();
        
            $fund=Fund_category::where('id',$student->daftarulang)->first();
            $role = 4;
            return view('member.daftarulang',compact('fund','role'));
        
    }
    public function seragam()
    {
        $token = Auth::guard('member')->user()->email; 
        $student = Student::where('token',$token)->first();
        $cek = Size::where('student_id',$student->id)->first();
        $role = 4;
        if($student->gender=='perempuan'){
            $jk = 'p';
        }else{
            $jk = 'l';
        }
        $uniforms=Uniform::where('gender',$jk)->get();
        return view('member.seragam',compact('role','uniforms','jk','cek'));
    }
    public function postsize(Request $request)
    {
        $token = Auth::guard('member')->user()->email; 
        $student = Student::where('token',$token)->first();

        $request->validate([
            'atasan'=>'required',
            'bawahan'=>'required',
        ],
        [
            'atasan.required' => 'Ukuran :attribute tidak boleh kosong',
            'bawahan.required' => 'Ukuran :attribute tidak boleh kosong'
        ]
        );
       
        $cek = Size::where('student_id',$student->id)->first();
        if ($cek==null) {
            Size::create([
            'student_id'=>$student->id,
            'atasan'=>$request->atasan,
            'bawahan'=>$request->bawahan,
            'jilbab'=>$request->jilbab,
        ]);
        }else{
        alert()->error('Data ukuranmu sudah ada, Hubungi admin untuk revisi','GAGAL !');
        return back();
        }
        alert()->success('Data ukuran baju telah dikirim','Berhasil');
        return back();
    }
    public function schedule()
    {
        $role = 0;
        return view('member.schedule',compact('role'));
    }
}
