<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use Uuid;
use Illuminate\Support\Facades\Input;
class EventController extends Controller
{
    public function create(Request $r)
    {	

    	$destinationPath = "covers";
		$file = $r->file('cover_image');
		$cover_image = Uuid::generate(5,'123',Uuid::NS_DNS).$file->getClientOriginalName();
    	$file->move($destinationPath, $cover_image);
    	//dd($cover_image);    	
        $e = new Event;
        $e->title = $r->input('title');
        $e->desc = $r->input('description');
        $e->cover_image = $cover_image;
        $e->type = $r->input('type');
        $e->time = $r->input('date') . ' ' .$r->input('time');
        $e->venue = $r->input('venue');
        $e->isActive = 'true';
        $e->save();
        return redirect('/admin/events');
    }
    public function index(Request $r)
    {
    	$e = Event::all();
        return view("/admin/events")->with('events',$e);
    }
     public function addEvent()
    {
        return view('/admin/addEvent');
        
    }
}
