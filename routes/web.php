<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;

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
//======================================
// store data into car table
// Route::get('storeCar',[CarController::class,'store']);
Route::post('store',[CarController::class,'store'])->name("storeCar");
// add data 
Route::get('createCar',[CarController::class,'create'])->middleware('verified');
Route::get('cars',[CarController::class,'index'])->name('cars');
Route::get('createPost',[PostController::class,'create']);
Route::post('storePost',[PostController::class,'store'])->name("storePost");
Route::get('posts',[PostController::class,'index'])->name('posts');
//update car data
Route::get('updateCar/{id}',[CarController::class,'edit']);
Route::put('update/{id}',[CarController::class,'update'])->name('update');
Route::get('showCar/{id}',[CarController::class,'show'])->name('showCar');
//update posts
Route::get('editPost/{id}',[PostController::class,'edit']);
Route::put('updatePost/{id}',[PostController::class,'update'])->name('updatePost');
//show post detail
Route::get('showPost/{id}',[PostController::class,'show'])->name('showPost');
//delete
Route::get('deleteCar/{id}',[CarController::class,'destroy']);
Route::get('trashed',[CarController::class,'trashed'])->name('trashed');
Route::get('forceDelete/{id}',[CarController::class,'forceDelete'])->name('forceDelete');
Route::get('restoreCar/{id}',[CarController::class,'restore'])->name('restoreCar');
//task 6
Route::get('deletePost/{id}',[PostController::class,'destroy']);
Route::get('trashedPost',[PostController::class,'trashed'])->name('trashedPost');
Route::get('forceDelete/{id}',[PostController::class,'forceDelete'])->name('forceDelete');
Route::get('restorePost/{id}',[PostController::class,'restore'])->name('restorePost');
//
Route::get('tests',function(){
    return view('image');
});
Route::get('tests1',function(){
    return view('test');
});
Route::post('imageUpload',[ExampleController::class,'upload'])->name('imageUpload');
Route::get('testHome',function(){
    return view('testHome');
});
Route::get('pages',function(){
    return view('layouts/pages');
});
Route::get('404',function(){
    return view('404');
})->name('404');
Route::get('contact',function(){
    return view('contact');
})->name('contact');
Route::get('home',function(){
    return view('testHome');
})->name('testHome');







Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
