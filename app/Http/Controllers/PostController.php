<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts=Post::get(); //load data in posts variable
        return view('posts', compact('posts')); //send data into posts blade file
        //compact(variable name)
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('addPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $posts=new Post();
        $posts->title=$request->title;
        $posts->description=$request->description;
        $posts->author=$request->author;
        if (isset($request->published)){
            $posts->published=1;
        }else{
            $posts->published=0;
        }
        $posts->save();
        return 'post added successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
