<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;
use App\User;
class adminRootController extends Controller
{
    public function pendingIndex()
    {
    	//return view('admin/pendingUsers');
    	$e = User::where("status","applied")->get();
    	//dd($users);
    	return view("/admin/user/pendingUsers")->with('users',$e);
    }
    public function pendingUserDetails($uid)
    {
    	$user = User::where("id",$uid)
    					->first();
    	if( $user ){
			return view('admin.pendingUserDetails')->with('user', $user);    		
    	}
    	return Redirect::back();
    }
}
