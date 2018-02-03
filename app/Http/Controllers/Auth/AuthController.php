<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Socialite;
class AuthController extends Controller
{
	public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

     public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect('/members/' . Auth::id());
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        if ($provider == 'google') {
        	return User::create([
        	'f_name' => $user->user['name']['givenName'],
            'l_name' => $user->user['name']['familyName'],
            'email'    => $user->email,
            'about'   => isset($user->tagline) ? $user->tagline: "",
            'avtar'   => isset($user->avatar) ? str_replace('sz=50', 'sz=100', $user->avatar): "",
            'type' => 'user',
            'website'   => isset($user->website) ? $user->website: "",
            'gender'   => isset($user->gender) ? $user->gender: "",
            'birth_date'   => isset($user->birthday) ? $user->birthday: "",
            'mobile'   => isset($user->mobile_number) ? $user->mobile_number: "",
            'status'   => 'register',
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
        } else if($provider == 'facebook'){
	       $name=explode(' ' , $user->name);
           return User::create([

            'f_name' => $name[0],
            'l_name' => $name[1],
            'email'    => $user->email,
            'about'   => isset($user->about) ? $user->about: "",
            'avtar'   => isset($user->avatar) ? $user->avatar_original : "",
            'type' => 'user',
            'website'   => isset($user->website) ? $user->website: "",
            'gender'   => isset($user->gender) ? $user->gender: "",
            'birth_date'   => isset($user->birthday) ? $user->birthday: "",
            'mobile'   => isset($user->mobile_number) ? $user->mobile_number: "",
            'status'   => 'register',
            'provider' => $provider,
            'provider_id' => $user->id
          ]);  
        }

    }   
}
