<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use Illuminate\Http\Request;
use Mail;
use App\Mail\testMaill;

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
    public function createSession(){
        session()->put('testSession','My first session value');
        session()->forget('testSession');
        return 'session created ' . session(('testSession'));
    }
    public function contact(Request $request){
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'email'=> 'required|string',
            'subject' => 'required',
            'message' => 'required',
           ]);
        Mail::to('abeerrahmed88@gmail.com')->send(new testMail($data));
        return redirect('contactUS');
    }

}
