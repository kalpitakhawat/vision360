<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Blog;
use Auth;
class MemberController extends Controller
{
	public function detail(Request $r,$id)
	{
		$u = User::where('id' , $id)->first();
		if ($u && $u->type == 'user') {
			if ($id == Auth::id()) {
			$b = Blog::where('user_id' , $id)->where('isActive' , 'true')->orderBy('created_at','DESC')->get();
			} else {
				$b = Blog::where('user_id' , $id)->where('isActive' , 'true')->where('status','Active')->orderBy('created_at','DESC')->get();
			}
			return view('memberDetail')->with('user',$u)->with('new',$r->input('new'))->with('blogs',$b);
		} else {
			return redirect('/');
		}
		
	}
	public function api(Request $r)
	{	
		//die($r->input('q'));
		$q = $r->input('q');
		$u = User::where(function ($query) use($q)
		{	
			$query->where('f_name','like','%'.$q.'%')->orWhere('l_name','like','%'.$q.'%');
		})->where('status' , 'active')->get();
		return response()->json($u);
	}
}