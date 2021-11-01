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
        return view('admin.home');
    }
    public function halamandua()
    {
        return view('beranda.hal2');
    }
    public function postForm(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required',
            'nick_name' => 'required',
            'school_origin' => 'required',
            'gender' => 'required',
            'place_birth' => 'required',
            'date_birth' => 'required',
            'special_needs' => 'required',
            'jumlah_saudara' => 'required',
            'living' => 'required',
            'address' => 'required',
            'rtrw' => 'required',
            'postalcode' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            //ayah
            'dad' => 'required',
            'dad_edu' => 'required',
            'dad_occupation' => 'required',
            'dad_income' => 'required',
            'dad_phone' => 'required',
            // mom
            'mom' => 'required',
            'mom_edu' => 'required',
            'mom_occupation' => 'required',
            'mom_income' => 'required',
            'mom_phone' => 'required',
            'email' => 'required',
        ]);

        DB::table('members')->where('email', $request->token)->update(
            ['level' => 'registered']
        );

        $data = $request->all();
        $data['status'] = 1;
        $activity = Student::create($data);
        if ($activity->exists) {
            return view('member.berhasilisi');
        } else {
            redirect()->route('form_pendaftaran');
        }
    }
    public function logout()
    {
        if (Auth::guard('member')->check()) {
            Auth::guard('member')->logout();
        }
    }
}
