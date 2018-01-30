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
    	return view("/admin/pendingUsers")->with('users',$e);
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
    public function approve(Request $r)
    {
        $u = User::find($r->input('id'));
        $u->status = 'active';
        $u->update();
        return redirect()->route('admin.users.pending');

    }
    public function reject(Request $r)
    {
        $u = User::find($r->input('id'));
        $u->status = 'rejected';
        $u->update();
        return redirect()->route('admin.users.pending');
    }
    public function block(Request $r)
    {
        $u = User::find($r->input('id'));
        $u->status = 'blocked';
        $u->update();
        return redirect()->route('admin.users.pending');
    }
}
