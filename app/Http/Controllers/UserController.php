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
    function getFormUpload(){
        return view('upload_file');
    }
    function postUpload(Request $req){
        //kiem tra file size
        if($req->hasFile('image')){
            $file = $req->file('image');
            
            if($file->getSize() > 102400){
                echo "File too large! Choose again";
                return;
            }
            $ext = $file->getClientOriginalExtension();
            $chkType =['png','jpg','gif'];
            if(!in_array($ext,$chkType)){
                echo"Check file type again!!";
                return;
            }
            $baseName = $file->getClientOriginalName();
            $newName = date('d-m-Y-').$baseName;
            $file->move('images',$newName);
            echo"Upload Success!!";
        }else{
            echo "File not found!";
        }
        // file type [png,jpg,gif]

        //rename
    }
    function getDetail(){
        return view('pages/detail');
    }
    function getType(){
        return view('pages/type');
    }
}
