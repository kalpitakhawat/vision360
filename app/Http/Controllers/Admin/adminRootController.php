<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class adminRootController extends Controller
{
    public function index()
    {
    	//return view('admin/pendingUsers');
    	$e = User::where("status","applied")->get();
    	//dd($users);
    	return view("/admin/pendingUsers")->with('users',$e);
    }
    public function pendingUserDetails($uid)
    {
    	User::where("id",$uid)->first();	
    }
}
