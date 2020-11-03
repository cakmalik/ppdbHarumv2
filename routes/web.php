<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Setup\TekkenController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\StudentController as ControllersStudentController;
use Illuminate\Routing\RouteGroup;

Route::get('/', function () {
    return view('template.landpage.first');
});

Route::group(['prefix' => 'wel'], function () {
    Route::get('announ',function(){
        return view('template.landpage.announ');
    });
    Route::get('contact',function(){
        return view('template.landpage.contact');
    });
});

//bagian Auth LOGIN & LOGOUT
Route::get('login',[LoginController::class,'showLoginMember'])->name('login.member');
Route::post('login',[LoginController::class,'postLoginMember'])->name('login.member');
Route::get('auth',[LoginController::class,'showLoginAdmin'])->name('login.admin');
Route::post('auth',[LoginController::class,'postLoginAdmin'])->name('login.admin');
Route::get('logout',[LoginController::class,'logout'])->name('logout');

//bagian Templating
Route::get('coba',function(){
    return view('template.app.master');
});

// Bagian Member belum isi data
Route::group(['middleware' => ['auth:member','ceklevel:member']], function () { 
    Route::get('form',[BerandaController::class,'index']);
    Route::post('form', [BerandaController::class,'postForm'])->name('postForm');
});

//bagian member sudah isi data
Route::group(['middleware' => ['auth:member','ceklevel:registered']], function () {
    Route::group(['prefix' => 'members'], function () {
 
        Route::get('index',[MemberController::class,'index'])->name('member.index');
    
    });
    
});


//bagian operator
Route::group(['middleware' => ['auth:user','ceklevel:2']], function () {
    Route::resource('students', StudentController::class);
    Route::get('op/home', [BerandaController::class,'opHome'])->name('opHome');
    Route::get('tekken', [TekkenController::class,'showCode']);
    Route::post('tekken', [TekkenController::class,'useCode'])->name('useCode');
    Route::group(['prefix' => 'students'], function () {
        Route::get('/', [OperatorController::class,'showStudents']);
        Route::get('show',[StudentController::class,'show']);
    });
    
    Route::group(['prefix' => 'members'], function () {
        Route::get('all',[MemberController::class,'showTable'])->name('students');
        Route::get('export',[StudentController::class,'export'])->name('export.students');
        Route::get('search',[StudentController::class,'search'])->name('members.search');
    });
});


Route::get('registered', function () {
    return view('registered');
});

Route::get('Member', 'MemberController@index');
Route::get('member/export', [MemberController::class,'exportExcel'])->name('exportToken');
