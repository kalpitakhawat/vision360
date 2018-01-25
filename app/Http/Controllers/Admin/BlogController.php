<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use App\User;
class BlogController extends Controller
{
    public function pendingIndex(Request $r)
    {
    	$blogs= Blog::where('status' , 'pending')->get();
    	foreach ($blogs as $b) {
    		$u= User::where('id',$b->user_id)->first();
    		$b->user_name  = $u->f_name . " " . $u->l_name;
    	}
    	return view('admin/pendingBlogs')->with('blogs',$blogs);
    }
    public function index(Request $r)
    {
    	$blogs= Blog::all();
    	foreach ($blogs as $b) {
    		$u= User::where('id',$b->user_id)->first();
    		$b->user_name  = $u->f_name . " " . $u->l_name;
    	}
    	return view('admin/blogs')->with('blogs',$blogs);
    }
    public function pendingBlogDetails(Request $r,$bid)
    {
    	
    }

}
