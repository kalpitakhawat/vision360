<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class MemberController extends Controller
{
    public function index(Request $r,$id)
    {

    	$u = User::where('id' , $id)->first();
   		return view('memberDetail')->with('u',$u)->with('new',$r->input('new'));	
    }
}
