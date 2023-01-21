<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.index', [
            'title' => 'Auth',
            'active' => 'auth'
        ]);
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            "email" => ['required','email'],
            "password" => ['required']
        ]);
                
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError','Login Gagal');
    }
    public function register(){
        return view('auth.register',[
            "title" => "Register",
            "active" => "auth"
        ]);
    }
    public function register_action(Request $request){
        
        $validatedData = $request->validate([
            'name' => ['required','max:100'],
            'username' => ['required','min:4','max:25','unique:users'],
            'email' => ['required','email:dns','unique:users'] ,
            'password' => ['required','min:8','max:100']

        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);
        $request->session()->flash('success', 'Registrasi berhasil! silahkan login');
        return redirect('/auth');
    }
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
