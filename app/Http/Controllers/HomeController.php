<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class HomeController extends Controller
{
    public function index(){
    	$post = Db::table('posts')->paginate(5);
    	$last_posts = Post::orderBy('id','desc')->get()->take(4);
    	return view('index',compact('post','last_posts'));
    }

    public function list($id){
    	$list_post = DB::table('posts')->where('category_id',$id)->paginate(6);
    	$last_posts = Post::orderBy('id','desc')->get()->take(4);
    	return view('posts.list',compact('list_post','last_posts'));
    }

    public function detail($id){
    	$post_detail = Post::where('id',$id)->first();
    	return view('posts.detail',compact('post_detail'));
    }
}
