<?php

namespace App\Http\Controllers\Setup;

use Illuminate\Http\Request;
use App\Models\Setup\Contact;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function table()
    {
        return view('landing.contact',[
            'title'=>'Kontak',
            'contacts'=>Contact::get()
        ]);
    }
    public function pengumuman()
    {
        return view('landing.pengumuman',[
            'title'=>'Pengumuman'
        ]);
    }
}
