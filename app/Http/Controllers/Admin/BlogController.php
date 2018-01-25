<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;
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
    	$blog = Blog::where('id',$bid)->first();
        if( $user ){
    	   $u= User::where('id',$blog->user_id)->first();
    	   return view('admin/pendingBlogs')->with('blog',$blog)->with('user' ,$u);
        }
        return Redirect::back();
    }
    public function approve(Request $r)
    {
    	$blog = Blog::where('id',$r->id)->first();
    	$blog->status = "Active";
    	$blog->update();
    }
    public function reject(Request $r)
    {
    	$blog = Blog::where('id',$r->id)->first();
    	$blog->status = "rejected";
    	$blog->update();
    }

}
