<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash;
use Illuminate\Contracts\Auth\Authenticatable;
use Str;
use Socialite;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function github()
    {
        return Socialite::driver('github')->redirect();

    }
    public function githubredirect()
    {

        $user = Socialite::driver('github')->user();
        //dd($user);
        $user = User::firstOrCreate([
            'email' => $user->email

        ],[
            'first_name' => $user->name,
            'username' => $user->name,
            'password' => Hash::make(Str::random(24))


        ]);
         Auth::login($user,true);

        return redirect('/');


    }

    public function google()
    {
        return Socialite::driver('google')->redirect();

    }
    public function googleredirect()
    {

        $user = Socialite::driver('google')->user();
        //dd($user);
        $user = User::firstOrCreate([
            'email' => $user->email

        ],[
            'first_name' => $user->name,
            'username' => $user->name,
            'password' => Hash::make(Str::random(24))


        ]);
         Auth::login($user,true);

        return redirect('/');


    }
    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();

    }
    public function facebookredirect()
    {
        $user = Socialite::driver('facebook')->user();
        //dd($user);
        $user = User::firstOrCreate([
            'email' => $user->email

        ],[
            'first_name' => $user->name,
            'username' => $user->name,
            'password' => Hash::make(Str::random(24))


        ]);
         Auth::login($user,true);

        return redirect('/');

    }

}
