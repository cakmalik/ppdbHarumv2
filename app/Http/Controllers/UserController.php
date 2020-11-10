<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function json(){
        return Datatables::of(User::all())->make(true);
    }

    public function index(){
        return view('list_users');
    }
}
