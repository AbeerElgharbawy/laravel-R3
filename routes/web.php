<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('test', function () {
//     return 'welcome to my first laravel website';
// });
// //send parameter
// Route::get('test1/{id}', function ($id) {
//     return 'the ID is : ' . $id;
// });
// //optional parameter
// Route::get('test2/{id?}', function ($id=0) {
//     return 'the ID2 is : ' . $id;
// });
//constraints
// Route::get('test2/{id?}', function ($id=0) {
//     return 'the ID2 is : ' . $id;
// })->where(['id'=>'[0-9]+']);

// Route::get('test2/{id?}', function ($id=0) {
//     return 'the ID2 is : ' . $id;
// })->whereNumber('id');

// Route::get('test3/{name?}', function ($name=null) {
//     return 'the name is : ' . $name;
// })->whereAlpha('name');

//constraints multiple parameter with regular expression
// Route::get('test4/{id}/{name}', function ($id,$name) {
//     return 'the age is : ' . $id.' the name is: '.$name;
// })->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);

// Route::get('product/{category}', function ($cat) {
//     return 'the category is : ' . $cat;
// })->whereIn('category',['laptop','mobile','pc']);

//prefix group
// Route::prefix('lar')->group(function(){
//     Route::get('test2/{id?}', function ($id=0) {
//         return 'the ID2 is : ' . $id;
//     })->where(['id'=>'[0-9]+']);
    
//     Route::get('test2/{id?}', function ($id=0) {
//         return 'the ID2 is : ' . $id;
//     })->whereNumber('id');
    
//     Route::get('test3/{name?}', function ($name=null) {
//         return 'the name is : ' . $name;
//     })->whereAlpha('name');
    
//     //constraints multiple parameter with regular expression
//     Route::get('test4/{id}/{name}', function ($id,$name) {
//         return 'the age is : ' . $id.' the name is: '.$name;
//     })->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);

//     Route::get('product/{category}', function ($cat) {
//         return 'the category is : ' . $cat;
//     })->whereIn('category',['laptop','mobile','pc']);
// });
// Route::get('/', function () {
//     return 'welcome to my page  ' ;
// });


// // fallback
// // Route::fallback(function(){
// //     return redirect('/');
// // });

// Route::get('food', function () {
//     return view('food');
// });

//Task 1

Route::get('about', function () {
    return 'Welcome to About page ';
});
Route::get('contact_us', function () {
    return 'Welcome to Contact US page ';
});
Route::prefix('blog')->group( function () {
    
    Route::get('/', function () {
        return 'Welcome to blog page ';
    });
    Route::get('science', function () {
        return 'Welcome to scince page ';
    });
    Route::get('sports', function () {
        return 'Welcome to sports page ';
    });
    Route::get('math', function () {
        return 'Welcome to math page ';
    });
    Route::get('medical', function () {
        return 'Welcome to medical page ';
    });

});
Route::get('login',function(){
    return view('login');
});
Route::post('logged',function(){
    // $email=$_POST["email"];
    // $password=$_POST["pwd"];
    // return 'email is : ' . $email . "<br>".'password is : ' .$password;
    return 'you are logged in';
})->name('logged'); 
Route::post('control',[ExampleController::class,'show']);
// ===================task 3=====================
Route::post('data',[ExampleController::class,'showData'])->name("mydata");