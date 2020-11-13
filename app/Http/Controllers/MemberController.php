<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Setup\Income;
use Illuminate\Http\Request;
use App\Exports\MemberExport;
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
            $ga = Income::where('category', $data->dad_income)->first()->amount;
            $gb = Income::where('category', $data->mom_income)->first()->amount;
            return view('member.data', [
                'data'=>$data,
                'ga'=>$ga,
                'gb'=>$gb,
                'role'=>0,
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
}
