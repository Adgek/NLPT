<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class BlogController extends Controller
{
    public function getBlogPage(){
    	// $posts = Post::published()->get();
    	// dd($posts->last());
    	return view('blogs');
    }

}
