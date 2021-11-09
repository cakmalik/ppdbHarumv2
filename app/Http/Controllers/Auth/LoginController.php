<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginMember()
    {
        return view('landingpage.login');
    }
    public function showLoginAdmin()
    {
        return view('auth.admin');
    }
    public function postLoginMember(Request $request)
    {
        if (Auth::guard('member')->attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::guard('member')->user()->level == "registered") {
                return redirect()->route('member.index');
            } elseif (Auth::guard('member')->user()->level == "accept") {
                return redirect()->route('member.accept');
            }
            return redirect('form');
        }
        return back();
    }
    public function postLoginAdmin(Request $request)
    {
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/op/home');
        }
        return back();
    }
    public function logout()
    {
        if (Auth::guard('member')->check()) {
            Auth::guard('member')->logout();
        } elseif (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
        }
        return redirect('/');
    }
}
