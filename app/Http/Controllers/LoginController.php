<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if (session('success') !=1) {
            return view('login');
        }
        elseif (session('success') ==1){
            return redirect('/dashboard');
        }
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        // dd($request);aaa

        $cek = User::where('username', "=", $request->input('username'))
            ->where('password', "=", $request->input('password'))->first();

        if ($cek) {
            $user = User::where('username', $request->username)->first();

            session(['success' => true,'username' => $request->input('username'), 
            'id' => $user->id]);
            return redirect('/dashboard');
        } else {
            return back()->with('Login Gagal', 'Username atau Password Salah');
        }
    }
    public function logout(){
        Session ::flush();
        return redirect('/');
    }

    public function error(){
        return view('error');
    }
}
