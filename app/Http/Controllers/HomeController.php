<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
    public function index(){
    	$post = Post::all()->take(3);
    	return view('index',compact('post'));
    }
}