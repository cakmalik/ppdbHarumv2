<?php

use App\Http\Controllers\AdminController;
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
use App\Models\setup;

Route::get('/', function () {
    $pesan_welcome = setup::where('name','pesan_welcome')->first()->value;
    $judul_welcome = setup::where('name','judul_welcome')->first()->value;
    return view('template.landpage.first',compact('pesan_welcome','judul_welcome'));
});


Route::group(['prefix' => 'wel'], function () {
    Route::get('announ',function(){
        $pengumuman = setup::where('name','pengumuman_welcome')->first()->value;
        return view('template.landpage.announ',compact('pengumuman'));
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
        Route::get('schedule', [MemberController::class,'schedule']);
    });
    Route::get('accRedirect',[MemberController::class,'accRedirect']);
});

// Member diterima
Route::group(['middleware' => ['auth:member','ceklevel:accept']], function () {
    Route::group(['prefix' => 'members'], function () {
        Route::get('accept',[MemberController::class,'accept'])->name('member.accept');
        Route::get('cek_data',[MemberController::class,'cekData']);
        Route::get('info_daftar_ulang',[MemberController::class,'infoDaftarUlang']);
        Route::get('fitting_seragam', [MemberController::class,'seragam']);
        Route::post('postsize',[MemberController::class,'postsize'])->name('post.size');
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
    Route::post('terima',[OperatorController::class,'confirmAcc']);
    Route::post('tolak',[OperatorController::class,'confirmReject']);
    Route::get('gantitolak/{student}',[OperatorController::class,'gantiTolak'])->name('ganti.tolak');
    Route::get('gantiterima/{student}',[OperatorController::class,'gantiTerima'])->name('ganti.terima');

    Route::get('confirmed',[OperatorController::class,'confirmed']);
    Route::get('op/fitting_seragam', [OperatorController::class,'tableFitting'])->name('op.fitting');
    Route::get('op/schedule', [OperatorController::class,'manageSchedule'])->name('op.schedule');

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
        Route::get('lunas/{student}', [OperatorController::class,'lunasDaftarulang'])->name('lunas.daftarulang');
        
    });
   
});


Route::group(['middleware' => ['auth:user','ceklevel:1']], function () {
    route::group(['prefix'=>'admin'],function(){
        route::get('setups',[AdminController::class,'setups']);
        route::get('{setup}/editsetup',[AdminController::class,'editSetup'])->name('edit.setup');
        route::post('{setup}/editsetup',[AdminController::class,'updateSetup'])->name('update.setup');
    });
    
});




Route::get('registered', function () {
    return view('registered');
});

Route::get('member/export', [MemberController::class,'exportExcel'])->name('exportToken');


//TRY YAJRA
Route::get('user',[UserController::class,'index']);
Route::get('user/json',[UserController::class,'json']);
