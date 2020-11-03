<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

class MyController extends Controller
{
    public function importExportView()
    {
       return view('import');
    }

    public function export() 
    {
        return Excel::download(new MembersExport, 'members.xlsx');
    }

    public function import() 
    {
        Excel::import(new MembersImport,request()->file('file'));
             
        return back();
    }
}
