<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only('showRegistrationForm');
    }
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
        $user->type = 'user';
        $user->save();
        Auth::login($user);
        return redirect('/register/second');
    }

    public function secondForm(Request $r)
    {
        $user=Auth::user();
        return view('secondForm')->with('u' , $user);
        
    }
    public function secondEntry(Request $r)
    {
        $user = User::find(Auth::id());
        $user->sub_cast = $r->input('sub_cast');
        $user->birth_date = $r->input('birth_date');
        $user->mobile = $r->input('mobile');
        $user->gender = $r->input('gender');
        $user->address = $r->input('address');
        $user->city = $r->input('city');
        $user->pincode = $r->input('pincode');
        $user->edu_qualification = $r->input('edu_qualification');
        $user->expertise = $r->input('expertise');
        $user->present_activity = $r->input('present_activity');
        $user->company_name_address = $r->input('company_name_address');
        $user->nature_of_busines = $r->input('nature_of_business');
        $user->company_pincode = $r->input('c_pincode');
        $user->about = $r->input('about');
        $user->website = $r->input('website');
        $avtar = $r->file('avtar');
         if ($avtar != '' || !empty($avtar)) {
            $av_name = Uuid::uuid4()->toString().$avtar->getClientOriginalName();
            $avtar->move(public_path().'/profiles/',$av_name );
            $user->avtar = '/profiles/'.$av_name;
        }
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
    public function edit()
    {
        $u = User::find(Auth::id());
        $sc = ["Kutchi Visa Oswal","Kutchi Dasa Oswal","Gurjar Visa Shrimali","Gurjar Dasa Shrimali","Vagad Sat Chovishi","Vagad Be Chovishi"];
        return view('accountEdit')->with('user' , $u)->with('sc' ,$sc);
    }
    public function update(Request $r)
    {
        $user = User::find(Auth::id());
        $user->sub_cast = $r->input('sub_cast');
        $user->birth_date = $r->input('birth_date');
        $user->mobile = $r->input('mobile');
        $user->gender = $r->input('gender');
        $user->address = $r->input('address');
        $user->city = $r->input('city');
        $user->pincode = $r->input('pincode');
        $user->edu_qualification = $r->input('edu_qualification');
        $user->expertise = $r->input('expertise');
        $user->present_activity = $r->input('present_activity');
        $user->company_name_address = $r->input('company_name_address');
        $user->nature_of_busines = $r->input('nature_of_business');
        $user->company_pincode = $r->input('c_pincode');
        $user->about = $r->input('about');
        $user->website = $r->input('website');
        $user->update();
    }
}
