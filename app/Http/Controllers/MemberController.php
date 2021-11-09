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
        $data = Student::where('token', $token)->first();
        if ($data->status == 1) {
            $pesan = setup::where('name', 'pesan_siswa_baru')->first();
            // $ga = Income::where('category', $data->dad_income)->first()->amount;
            // dd($ga);
            // $gb = Income::where('category', $data->mom_income)->first()->amount;
            return view('member.index', [
                'data' => $data,
                // 'ga' => $ga,
                // 'gb' => $gb,
                'menu_id' => 5,
                'pesan' => $pesan,
            ]);
        } elseif ($data->status == 3) {
            $full_name = $data->full_name;
            $nama = $data->nick_name;
            return view('member.maaf', compact('full_name', 'nama'));
        } else {
            $full_name = $data->full_name;
            return view('member.selamat', compact('full_name'));
        }
    }
    public function informasiBiaya()
    {
        $menu_id = 5;
        return view('member.informasi_biaya',compact('menu_id'));
    }
    public function showTable()
    {
        $students = Student::latest()->paginate(1000);
        $jumlah_pendaftar = Student::get()->count();
        return view('operator.students', compact('students', 'jumlah_pendaftar'));
    }

    public function accept()
    {
        $token = Auth::guard('member')->user()->email;
        $data = Student::where('token', $token)->first();
        $full_name = $data->full_name;
        return view('member.selamat', compact('full_name'));
    }
    //saat siswa diterima
    public function roleDiterima()
    {
        $token = Auth::guard('member')->user()->email;
        $student = Student::where('token', $token)->first();
        $menu_id = 4;
        return view('member.show', compact('student', 'menu_id'));
    }

    public function cekData()
    {
        $token = Auth::guard('member')->user()->email;
        $student = Student::where('token', $token)->first();
        $menu_id = 4;
        return view('member.show', compact('student', 'menu_id'));
    }
    public function infoDaftarUlang()
    {
        $alurdaftarulang = setup::where('name', 'alur_daftar_ulang')->first();
        // dd($alurdaftarulang);
        $token = Auth::guard('member')->user()->email;
        $student = Student::where('token', $token)->first();

        $fund = Fund_category::where('id', $student->daftarulang)->first();
        $menu_id = 4;
        return view('member.daftarulang', compact('fund', 'menu_id', 'alurdaftarulang'));
    }
    public function seragam()
    {
        $token = Auth::guard('member')->user()->email;
        $student = Student::where('token', $token)->first();
        $cek = Size::where('student_id', $student->id)->first();
        $telahbayar = $student->telahbayar;
        $menu_id = 4;
        if ($student->gender == 'perempuan') {
            $jk = 'p';
        } else {
            $jk = 'l';
        }
        $uniforms = Uniform::where('gender', $jk)->get();
        return view('member.seragam', compact('menu_id', 'uniforms', 'jk', 'cek', 'telahbayar'));
    }
    public function postsize(Request $request)
    {
        $token = Auth::guard('member')->user()->email;
        $student = Student::where('token', $token)->first();

        $request->validate(
            [
                'atasan' => 'required',
                'bawahan' => 'required',
            ],
            [
                'atasan.required' => 'Ukuran :attribute tidak boleh kosong',
                'bawahan.required' => 'Ukuran :attribute tidak boleh kosong'
            ]
        );

        $cek = Size::where('student_id', $student->id)->first();
        if ($cek == null) {
            Size::create([
                'student_id' => $student->id,
                'atasan' => $request->atasan,
                'bawahan' => $request->bawahan,
                'jilbab' => $request->jilbab,
            ]);
        } else {
            alert()->error('Data ukuranmu sudah ada, Hubungi admin untuk revisi', 'GAGAL !');
            return back();
        }
        alert()->success('Data ukuran baju telah dikirim', 'Berhasil');
        return back();
    }
    public function schedule()
    {
        $menu_id = 5;
        $token = Auth::guard('member')->user()->email;
        $student = Student::where('token', $token)->first();
        return view('member.schedule', compact('menu_id', 'student'));
    }
}
