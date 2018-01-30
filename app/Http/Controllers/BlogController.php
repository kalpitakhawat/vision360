<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Uuid;
use Auth;
class BlogController extends Controller
{
   	public function create(Request $r)
   	{
   		$b = new Blog;
   		$b->blog_id = Uuid::generate(5 , $r->input('title') , Uuid::NS_DNS);
   		$b->user_id= Auth::id();
   		$b->title = $r->input('title');
   		$b->short_desc = $r->input('short_desc');
   		$b->desc = $r->input('desc');
   		$b->status = 'pending';
   		$b->isActive= 'true';
   		$b-->save();
         return redirect('/members/'.Auth::id().'?new=true');
   	}

}
