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
		$name = Uuid::generate(5,'123',Uuid::NS_DNS).$file->getClientOriginalName();
    	$file->move($destinationPath, $name);
    	dd($name);    	
    }
    public function index(Request $r)
    {
    	
    }
}
