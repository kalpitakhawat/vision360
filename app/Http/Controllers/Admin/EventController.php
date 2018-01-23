<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use Uuid;
class EventController extends Controller
{
    public function create(Request $r)
    {	$path = $r->file('cover_image')->storeAs('event_cover', Uuid::generate(5,'123',Uuid::NS_DNS));

    	
    }
    public function index(Request $r)
    {
    	
    }
}
