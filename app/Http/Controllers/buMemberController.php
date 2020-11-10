<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Exports\MemberExport;
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
        $data = DB::table('students')->where('token', $token)->first();
        return view('member.data',compact(['data','token']));
    }
    public function showTable()
    {
        $students = Student::latest()->paginate(15);
        return view('op.students',compact('students'));
    }
    
}
