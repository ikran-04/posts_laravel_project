<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index(){
        return view('auth.register');
    }

    public function store(Request $Request){
        $this->validate($Request,[
            'name'=>'required|max:255',
            'username'=>'required|max:255',
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed',
        ]);
        
        User::create([
            'name' => $Request->name,
            'username' => $Request->username,
            'email' => $Request->email,
            'password' => Hash::make($Request->password),
        ]);

        auth()->attempt($Request -> only('email','password'));

        return redirect()->route('dashboard');
    }
}
