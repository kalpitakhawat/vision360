<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Circular;
class CircularController extends Controller
{
    public function index()
    {
    	$c = Circular::all();
    	return view("circulars")->with('circulars',$c);
    }
    public function detail($id)
    {
    	$c = Circular::where('id',$id)->first();
    	return view("circularDetail")->with('circular',$c);
    }
}
