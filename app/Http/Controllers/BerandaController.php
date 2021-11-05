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
        return view('member.form');
    }
    public function opHome()
    {
        return view('admin.home');
    }

    // ini input data siswa yang mendaftar
    public function memberPost(Request $request)
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

        $data = $request->all();
        $data['status'] = 1;
        $activity = Student::create($data);
        // jika berhasil input data
        if ($activity->exists) {
        // mengubah level pada members_tabel menjadi registered (telah daftar)
            DB::table('members')->where('email', $request->token)->update(
                ['level' => 'registered']
            );
            return view('member.berhasilisi');
        } else {
            redirect()->back();
        }
    }
    public function logout()
    {
        if (Auth::guard('member')->check()) {
            Auth::guard('member')->logout();
        }
    }
}
