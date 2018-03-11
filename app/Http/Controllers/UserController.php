<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getLoginForm(){
        $userName = "admin";
        $password = '1234567';
        $arr = [
            'mon1'=>'PHP',
            'mon2'=>'MEAN',
            'mon3'=>'Android',
            'mon4'=>'iOS'
        ];
        //return view('login', compact('userName','password')); //c1
        return view('login', [
            'user_name'=>$userName,
            'password'=>$password,
            'arr'=>$arr
        ]);
    }
    function getRegisterForm(){
        return view('register');
    }
    function postRegisterForm(Request $req){
        // echo $_POST['fullname']; 
        // echo $req->fullname;
        // echo "<br>";
        // echo $req->email;
        // echo "<br>";
        // echo $req->password;
        // echo "<br>";
        // echo $req->confirm_password;
        $validator = $req->validate([
            'fullname'=>'required|max:50',
            'email'=>'required|max:50',
            'password'=>'required|min:6|max:20',
            'confirm_password'=>'required|same:password',
            'address'=>'required',
            'phone'=>'required|numeric',
        ]);
        // $data = $req->all();
        // echo "<pre>";
        // print_r($data);
        // return view('register');
        return redirect()->route('user_login')->with('msg','Đăng kí thành công');
    }
    function getHome(){
        return view('pages/home');
    }
}
