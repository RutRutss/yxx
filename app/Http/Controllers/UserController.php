<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        if (!empty($request->keyword)) {
            $users = User::where('user_type', 'admin')
                ->where('username', 'LIKE', '%' . $request->keyword . '%')
                ->orderBy('id')
                ->get();
        } else {
            // $users = User::all();
            $users = User::all();
        }


        return view('user', compact('users'));
    }



    //Login
    public function loginForm()
    {
        return view('login');
    }

    //Logout
    public function logout()
    {
        session()->forget('user');
        return view('login');
    }



    public function checkUser(Request $request)
    {
        $user = User::where('username', $request->username)
            ->where('password', $request->password)
            ->first();

        if ($user) {
            session()->put('user', $user);
            return redirect('/')->withErrors(['message' => 'เข้าสู่ระบบแล้วจ้า']);
        } else {
            return redirect('/login')->withErrors(['message' => 'username และ password บ่ถืกต้อง']);
        }
    }
}
