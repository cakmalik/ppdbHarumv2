<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductAjaxController;
use App\Http\Controllers\Setup\TekkenController;
use App\Http\Controllers\StudentController as ControllersStudentController;
use App\Models\Member;

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
    Route::get('accRedirect',[MemberController::class,'accRedirect']);
});

// Member diterima
Route::group(['middleware' => ['auth:member','ceklevel:accept']], function () {
    Route::group(['prefix' => 'members'], function () {
        Route::get('accept',[MemberController::class,'accept'])->name('member.accept');
        Route::get('cek_data',[MemberController::class,'cekData']);
        Route::get('info_daftar_ulang',[MemberController::class,'infoDaftarUlang']);
    });
    Route::get('roleDiterima',[MemberController::class,'roleDiterima']);

});


//bagian operator
Route::group(['middleware' => ['auth:user','ceklevel:1,2']], function () {
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

    Route::get('confirmpage',[OperatorController::class,'confirmPage'])->name('confirmPage');
    // Route::post('confirmpage',[OperatorController::class,'postConfirmPage']);
    Route::post('terima',[OperatorController::class,'confirmAcc']);
    Route::post('tolak',[OperatorController::class,'confirmReject']);

    Route::get('confirmed',[OperatorController::class,'confirmed']);
    
    Route::group(['prefix' => 'setup'], function () {
        Route::get('fundcategories',[OperatorController::class,'fundCategories'])->name('fund');

        Route::get('uniform',[OperatorController::class,'uniformTable']);
        Route::get('opset',[OperatorController::class,'opset'])->name('op.set');
        Route::post('setwa',[OperatorController::class,'setwa'])->name('set.wa');
    });
    Route::group(['prefix' => 'fund'], function () {    
        Route::get('{fund}/edit ',[OperatorController::class,'editFund'])->name('edit.fund');
        Route::post('{fund}/edit',[OperatorController::class,'updateFund'])->name('update.fund');
        Route::post('store',[OperatorController::class,'storeFund'])->name('store.fund');
        Route::delete('{fund}',[OperatorController::class,'deleteFund'])->name('delete.fund');
        Route::get('applyDaftarUlang',[OperatorController::class,'applyDaftarUlang']);
        Route::post('applyDaftarUlang/{student}',[OperatorController::class,'postApplyDaftarulang'])->name('apply.daftarulang');
    });
   
});


Route::get('registered', function () {
    return view('registered');
});

Route::get('member/export', [MemberController::class,'exportExcel'])->name('exportToken');


//TRY YAJRA
Route::get('user',[UserController::class,'index']);
Route::get('user/json',[UserController::class,'json']);
