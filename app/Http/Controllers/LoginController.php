<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin(){
        return view('login');
    }

    public function login(Request $request){
        $userName = $request->input('inputUserName');
        $password = $request->input('inputPassword');
        if ($userName == 'admin' && $password == '123456'){
            $request->session()->push('login', true);
            return redirect()->route('show.blog');
        }
        $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng.';
        $request->session()->flash('login_fail', $message);
        return view('login');
    }
}
