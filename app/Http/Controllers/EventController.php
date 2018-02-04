<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class EventController extends Controller
{
    public function index(Request $r)
    {
    	$ue = Event::where('type','upcoming')->get();
    	$re = Event::where('type','recent')->get();
        return view("/events")->with('uevents',$ue)->with('revents' , $re);
    }
    public function detail(Request $r , $id)
    {	
    	$e = Event::find($id);
    	if ($e && $e->type=='upcoming' && $e->isActive) {
    		return view('/eventDetails')->with('event' , $e);
    	} else {
    		return redirect('/events');
    	}    	
    }
   
}
