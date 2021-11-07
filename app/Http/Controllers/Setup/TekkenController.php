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
        $rnd = Str::random(8);
        return view('op.tekken.showcode',[
            'kode_tekken'=>Str::upper($rnd),
            'token_table'=>DB::table('members')->orderBy('id','desc')->paginate(1000)
        ]);
    }
    public function useCode(Request $request)
    {
        DB::table('members')->insert([
            'name'=>'calon',
            'username'=>Str::random(11),
            'email'=>$request->kode_tekken,
            'level'=>'member',
            'password'=>bcrypt("password"),
            'remember_token'=>Str::random(60)
        ]);
        return redirect()->back()->with(['success' => 'Kode SIAP di PASTE']);
    }
}
