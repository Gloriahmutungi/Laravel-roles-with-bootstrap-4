<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserLog;

class AuthController extends Controller
{
    public function index(){
        return view('layouts.app');
    }
    public function userlogs(){
        $userlogs = DB::table('user_logs')
            ->join('users', 'user_logs.user_id', '=', 'users.id')
            ->select('user_logs.*', 'users.name as username')
            ->get();
        return view('userlogs.index',compact('userlogs'));
    }



    public function login(){
        return view('auth.login');
    }
    public function postlogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $description = 'User logged in';
            $ipAddress =  $_SERVER['REMOTE_ADDR'];
            UserLog::create([
                'user_id' => $user->id,
                'description' => $description,
                'ip_address' => $ipAddress
            ]);
            Session::flash('success',"You are signed in");
            return redirect()->route('users.index');
        }else{
            Session::flash('fail',"Authentication failed");
            return redirect()->route('login');
        }

    }
    public function register(){
        return view('auth.register');
    }
    public function postregister(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'mobile'=>'required',
            'password'=>'required|confirmed|min:6',
          
        ]);
        $insert=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'password'=>Hash::make($request->password)
        ]);
        if($insert){
            Session::flash('success', "Account created successfully");
            return redirect()->route('login');
        }else{
            Session::flash('fail',"Error creating account");
            return redirect()->route('register');
        }

    }
    public function logout(){
        Session::flush();
        Auth()->logout();
        
        return redirect()->route('login');
    }
}
