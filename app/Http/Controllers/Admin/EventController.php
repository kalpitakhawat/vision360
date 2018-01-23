<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function create(Request $r)
    {	$path = $r->file('cover_image')->storeAs('event_cover', $this->uuid());

    	dd($r->input());
    }
    public function index(Request $r)
    {
    	
    }
}
