<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
        $posts=Post::orderBy('id','DESC')->paginate(5);
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
        // $request->validate([
        //     'title'=>'required',
        //     'content'=>'required'
        // ]);
        Post::create([
            'name'=>$request->title,
            'content'=>$request->body
        ]);
        return redirect('posts')->with('success','Post Added');
    }
    public function update($id){
        $post=Post::find($id);
        return view('CRUD.update',compact('post'));
    }
    public function change(Request $request,$id){
        $request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
        Post::find($id)->update([
            'title'=>$request->title,
            'content'=>$request->body
        ]);
        return redirect('posts')->with('success','Post Updated');
    }


}
