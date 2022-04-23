<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class AdminController extends Controller {

    public function dashboard() {
       return view('admin.dashboard');
    }
    public function login() {
       return view('admin.login');
    }

    public function post_login(Request $req)
    {
        $req->validate([
            'email' => 'required|exists:users',
            'password' => 'required'
        ], [
            'email.required' => 'Email khồng được để trống',
            'email.exists' => 'Email khồng hợp lệ'
        ]);

        $data = $req->only('email','password');
        $check_login = Auth::attempt($data);
        if ($check_login) {
            return redirect()->route('admin.dashboard')->with('yes','Đăng nhập thành công');
        }else{
            return redirect()->back()->with('no','Mật khẩu không hợp lệ');

        }
    }
}
?>