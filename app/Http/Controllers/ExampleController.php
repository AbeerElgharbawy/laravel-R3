<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function show(){
        return 'welcome to my first controller';
    }
    public function showData(){       
            $email=$_POST["email"];
            $password=$_POST["pwd"];
            if(isset($_POST["remember"])){
                $remember="True";
            }else{$remember="False";}
            return 'Email : '.$email .'<br> Password : '. $password . '<br> Remember Me:'.$remember;
    }
    public function upload(Request $request){
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'assets/images';
        $request->image->move($path, $file_name);
        return 'Uploaded';
    }

}
