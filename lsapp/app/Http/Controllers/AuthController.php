<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Auth;
use Exception;

class AuthController extends Controller
{

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


    public function redirectToGoogle()
    {
        try{

            return Socialite::driver('google')->redirect();
        }
        catch (Exception $e){
            return Socialite::driver('google')->stateless()->user();
        }
    }
    
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            
            $userModel = new User;
            $createdUser = $userModel->addNew($user);
            Auth::loginUsingId($createdUser->id);
            return redirect()->route('home');
        } catch (Exception $e) {

            return redirect('auth/google');
        }
    }
}
