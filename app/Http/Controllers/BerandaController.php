<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda.form');
    }
    public function opHome()
    {
        return view('beranda.op');
    }
    public function halamandua()
    {
        return view('beranda.hal2');
    }
    public function postForm(Request $request)
    {
        DB::table('members')->where('email', $request->token)->update(
            ['level'=>'registered']);

        $data = $request->all();
        $data['status'] = 1;
        Student::create($data);
        $this->logout();
        return redirect('/registered')->with('status','Berhasil melengkapi data');
    }
    public function logout()
    {
        if(Auth::guard('member')->check()){
            Auth::guard('member')->logout();
        }
    }
    
}
