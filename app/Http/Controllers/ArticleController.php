<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use ReflectionFunctionAbstract;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

     public function getlogin()
    {
        return view('login');
    }

     public function getregister()
    {
        return view('register');
    }

    public function dataregister(Request $req)
    {
         $req->validate([
            'username' => 'required',
            'email' => 'required|unique:articles',
            'password' => 'required',
            'confirm' => 'required'
        ]);
        Article::create([
            "username" => $req->username,
            "email" => $req->email,
            "password" => Hash::make($req->password)
        ]);

        return redirect('login');
    }


    public function loginauth(Request $req)
    {
        

        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($req->only('email','password')))
        {
            return redirect()->route("home");
        }
        else{
            return back()->with('fail','User Not Found');
        }
       
    }
    public function logouthandle()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    
}
