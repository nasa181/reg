<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class loginManager extends Controller
{
    //
    public function firstPage(){
        $something = Session::get('error');
        $ok = Session::get('success');
        if($something == null)
            $something = false;
        if($ok == null)
            $ok = false;
        return view('welcome',compact('something','ok'));
    }
    public function getLogin(){
        return view('testLogin');
    }
    public function getNewUser(){
        return view('register-page');
    }

    public function postForm(Request $request){
        $user = $request->newUser;
        $pass = $request->newPass;
        $confirm_pass = $request->conPass;
        $mail = $request->new_mail;
        if($pass != $confirm_pass) return redirect('createNewUser');
        $new_username = new User();
        $new_username->username = $user;
        $new_username->password = bcrypt($pass);
        $new_username->email = $mail;
        $new_username->save();
        return redirect('/')->with('success',true)->with('pass',$pass);
    }
    public function checkID(Request $request){
        $user = $request->name_userName;
        $password = $request->name_password;
        if (Auth::attempt(array('username' => $user, 'password' => $password),null))
        {
            return redirect('testLogin');
        }
        else{
            return Redirect::back()->with('error',true);
        }

    }
    public function getLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }


}
