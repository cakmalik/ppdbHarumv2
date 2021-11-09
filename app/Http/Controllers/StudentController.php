<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Exports\StudentExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
    public function export() 
    {
        return Excel::download(new StudentExport, 'Students.xlsx');
    }
    
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show',compact('student'));
    }

   
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        Student::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('students')
            ->with('success', 'User Berhasil Diupdate');
    }

  
    public function destroy($id)
    {
        Student::find($id)->delete();
        alert()->success('Menghapus data','Berhasil');
        return back();
    }
    
    public function search(Request $request)
	{
		// menangkap data pencarian
        $cari = $request->search;
        // dd($cari);
    	// mengambil data dari table pegawai sesuai pencarian data
		$students = DB::table('students')
		->where('full_name','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('operator.students',compact('students'));
 
	}
    
}
