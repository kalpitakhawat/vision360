<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $r)
    {
    	$ue = Event::where('type','upcoming')->get();
    	$re = Event::where('type','recent')->get();
        return view("/events")->with('uevents',$ue)->with('revents' , $re);
    }
}
