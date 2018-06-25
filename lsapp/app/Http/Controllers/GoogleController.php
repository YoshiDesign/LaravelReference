<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Illuminate\Http\Request;

class GoogleController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        // if(!$user)
        // {
        //     return view('/')->with('Error', 'OAuth Failed');
        // }
        // $data = [
        //     'expires' => $user->expiresIn,
        //     'user_id' => $user->getId(),
        //     'nickname' => $user->getNickname()
        // ];

        dd($user);
    }
}
