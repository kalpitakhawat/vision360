<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Circular;
class CircularController extends Controller
{
    public function create(Request $r)
    {
    	$c = new Circular;
    	$c->title = $r->input('title');
    	$c->description = $r->input('description');
    	$c->save();
    	return redirect('/admin/circulars');
    }
    public function index()
    {
    	$c = Circular::all();
    	return view("/admin/circulars")->with('circulars',$c);
    }
    public function addCircular()
    {
        return view('/admin/addCircular');
        
    }
}
