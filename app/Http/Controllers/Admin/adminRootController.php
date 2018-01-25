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
     public function index()
    {
        //return view('admin/pendingUsers');
        $e = User::all();
        //dd($users);
        return view("/admin/user")->with('users',$e);
    }
    public function changeStatus($status ,Request $r)
    {
        $status = strtolower($status);

        if( in_array($status, [ 'approved', 'rejected', 'block', 'unblock'] ) ){
            User::where('id',$r->input("id"))->update('status',$status);
        }
    }
}
