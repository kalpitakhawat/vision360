<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use App\Blog;
use App\Circular;
use App\Event;
class RootController extends Controller
{
    public function index(Request $r)
    {
    		$startdate= new Carbon("2018-02-01");
    		$enddate = Carbon::now();
    		$difference = $enddate->diff($startdate)->days;
            $userCount = User::where('status' , 'active')->count();
            $offset = (($difference-1) * 4) % $userCount;
            $u = User::where('status' , 'active')->where('id','>',$offset)->take(4)->get();
            
            if( $u->count() < 4) {
                $firstXUsers = User::where('status' , 'active')->take( 4 - $u->count()  )->get();    
                $u = $u->merge($firstXUsers);
            }

    		$circular = Circular::whereDate('created_at', '>=', Carbon::now()->subDays(3))->get();

    		$blogs = Blog::where('status' , 'active')
                            // ->where('isActive' , 'true')
                            ->orderBy('created_at','DESC')->skip(0)->take(3)->get();
    		foreach ($blogs as $blog) {
    			$bu = User::find($blog->user_id);
    			$blog->user_name = $bu->f_name . " " . $bu->l_name;
    			$blog->avtar = $bu->avtar;
    		}
    		
    		$e = Event::where('isActive','true')->where('type' , 'upcoming')->orderBy('created_at','DESC')->get(); 

    		return view('home')->with('users', $u)->with('circulars' , $circular)->with('blogs' , $blogs)->with('event',$e);
    }
    public function about()
    {
        return view('about');
    }
    public function pending()
    {
            return view('pending');
    }
    public function reject()
    {
            return view('reject');
        
    }
    public function block()
    {
        return view('block');
    }
}
