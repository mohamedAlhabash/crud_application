<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
        $posts=Post::orderBy('id','DESC')->paginate(10);
        return view('CRUD.index',compact('posts'));
    }
    public function delete($id){
        Post::find($id)->delete();
        return redirect()->back()->with('success','Post Delete');
    }
    public function add(){
        return view('CRUD.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
        Post::create([
            'title'=>$request->title,
            'content'=>$request->body
        ]);
        return redirect('posts')->with('success','Post Added');
    }

}
