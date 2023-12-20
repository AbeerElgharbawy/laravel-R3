<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    private $columns =['title','description','published'];

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
        $data=$request->validate([
            'title'=>'required|string|max:50',
            'description'=>'required|string',
            'author'=>'required|string|max:50',
        ]);
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
        $posts=Post::findOrFail($id); //load data in cars variable
        return view('showPost', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('editPost',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data=$request->only($this->columns);
        $data['published']=isset($request->published);
        Post::where('id',$id)->update($data);
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id',$id)->delete();
        return redirect('posts');
    }
    public function trashed()
    {
       $posts=Post::onlyTrashed()->get();
       return view('trashedPost',compact('posts'));
    }
    public function forceDelete(string $id)
    {
        Post::where('id',$id)->forceDelete();
        return redirect('posts');
    }
    public function restore(string $id)
    {
        Post::where('id',$id)->restore();
        return redirect('posts');
    }
    
}
