<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
        $post = post::all();
        return view('post.index',compact('post'));
    }
}
