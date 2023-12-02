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
}
