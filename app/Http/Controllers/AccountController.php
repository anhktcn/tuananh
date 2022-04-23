<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Auth;

class AccountController extends Controller
{
    public function login()
    {
        return view('site.login');
    }
    public function post_login(Request $req)
    {
       $data = $req->only('email','password');
       if(Auth::guard('account')->attempt($data)) {
        return redirect()->route('home')->with('ok','Đăng nhập thành công');

       }
    }

    public function register()
    {
        return view('site.register');
    }

    public function post_register(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required',
            're_password' => 'required|same:password',
        ], [
            're_passsword.same' => 'Nhập lại MK không chính xác'
        ]);
        $data = $req->only('name','email','phone','address');
        $data['password'] = bcrypt($req->password);
        
        Account::create($data);

        return redirect()->route('home.login')->with('ok','Đăng ký thành cong thành công');

    }

    public function logout()
    {
        Auth::guard('account')->logout();
        return redirect()->route('home.login')->with('ok','Đăng xuất thành công');

    }
}
