<?php

namespace App\Http\Controllers;
use App\Models\setup;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Setup\Uniform;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Support\Facades\DB;
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
    public function fundCategories()
    {
        $funds = Fund_category::latest()->get();
        return view('op.fund_categories',compact('funds'));
    }
    public function confirmAcc(Request $request)
    {
        Student::whereIn('id',$request->status)->update(['status'=>2]);
        return back();
    }
    public function confirmReject(Request $request)
    {
        Student::whereIn('id',$request->status)->update(['status'=>3]);
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
    // public function store()
    // {
    //     alert()->success('You have been logged out.', 'Good bye!');
    //     return redirect('op/home');
    // }
}
