<?php

namespace App\Http\Controllers\Setup;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class TekkenController extends Controller
{
    public function showCode()
    {
        return view('op.tekken.showcode',[
            'kode_tekken'=>Str::random(8),
            'token_table'=>DB::table('members')->orderBy('id','desc')->paginate(7)
        ]);
    }
    public function useCode(Request $request)
    {
        // $request->validate([
        //     'email'=>'required|unique:members'
        // ]);
        DB::table('members')->insert([
            'name'=>'calon',
            'username'=>Str::random(11),
            'email'=>$request->kode_tekken,
            'level'=>'member',
            'password'=>bcrypt("password"),
            'remember_token'=>Str::random(60)
        ]);
        return back();
    }
}
