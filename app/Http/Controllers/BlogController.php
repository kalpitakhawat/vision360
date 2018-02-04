<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;
use Uuid;
use Auth;
class BlogController extends Controller
{
    public function index()
    {
      return view('blogs');
    }
   	public function create(Request $r)
   	{
   		$b = new Blog;
   		$b->blog_id = Uuid::generate(5 , $r->input('title') , Uuid::NS_DNS);
   		$b->user_id= Auth::id();
   		$b->title = $r->input('title');
         $b->short_desc = $r->input('short_desc');
   		$b->categories = $r->input('categories');
   		$b->desc = $r->input('desc');
   		$b->status = 'pending';
   		$b->isActive= 'true';
   		$b->save();
         return redirect('/members/'.Auth::id().'?new=true');
   	}
      public function detail($id)
      {
         $blog = Blog::where('id',$id)->first();
        if( $blog && $blog->isActive == 'true'){
         $u= User::where('id',$blog->user_id)->first();
         return view('blogDetail')->with('blog',$blog)->with('user' ,$u);
        }
        return redirect('/blogs');
      }
      public function delete(Request $r)
      {
        $b = Blog::find($r->input('id'));
        $b->isActive = 'false';
        $b->update();
      }

    public function ApiIndex(Request $r)
    {
      $q = $r->input('q');
      $blogs = Blog::where(function ($query) use($q)
      { 
        $query->where('title','like','%'.$q.'%')->orWhere('short_desc','like','%'.$q.'%')->orWhere('categories','like','%'.$q.'%');
      })->where('status' , 'active')->where('isActive' , 'true')->orderBy('created_at' , 'DESC')->get();
      foreach ($blogs as $blog) {
        $u = User::where('id',$blog->user_id)->first();
        $blog->user_name = $u->f_name .' '. $u->l_name;
        $blog->avtar = $u->avtar;
      }
      return response()->json($blogs);
    }
    public function write()
    {
      return view('addblog');
    }
}
