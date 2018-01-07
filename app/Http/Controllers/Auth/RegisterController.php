<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm(Request $r)
    {
        return view('auth/register');
    }

    public function register(Request $r)
    {
        $user = new User;
        $user->f_name = $r->f_name;
        $user->l_name = $r->l_name;
        $user->email = $r->email;
        $user->password = Hash::make($r->password);
        $user->status = 'register';
        $user->save();
        Auth::login($user);
        return redirect('/');
    }

    public function secondForm(Request $r)
    {
        $user=Auth::user();
        return view('secondForm')->with('u' , $user);
        
    }
    public function secondEntry(Request $r)
    {
        $user = User::find(Auth::id());
        $user->sub_cast = $r->sub_cast;
        $user->birth_date = $r->birth_date;
        $user->gender = $r->gender;
        $user->address = $r->address;
        $user->city = $r->city;
        $user->pincode = $r->pincode;
        $user->edu_qualification = $r->edu_qualification;
        $user->expertise = $r->expertise;
        $user->present_activity = $r->present_activity;
        $user->company_name_address = $r->company_name_address;
        $user->nature_of_busines = $r->nature_of_busines;
        $user->company_pincode = $r->company_pincode;
        $user->about = $r->about;
        $user->website = $r->website;
        $user->avtar = $r->avtar;
        $user->status = 'donation';
        $user->update();
        return redirect('/register/donation');
    }
    public function donationForm(Request $r)   
    {
        return view('donation');
    }

    public function donate(Request $r)
    {   
        $user = User::find(Auth::id());
        $user->transaction_id = '123456';
        $user->status = 'applied';
        $user->update();
        return redirect('/register/pending');
    }
    
    public function pending(Request $r)
    {
        return view('pending');
    }
}
