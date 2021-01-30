<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\District;
use App\Models\Division;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

     /**
     * @override.

     * showing registration form
     * @return void view
     */

     public function showRegistrationForm()
    {
            $divisions=Division::orderBy('priority','asc')->get();
            $districts=District::orderBy('name','asc')->get();
        return view('auth.register',compact('districts','divisions'));
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'division_id' => ['required', 'numeric', 'max:255'],
            'district_id' => ['required', 'numeric', 'max:255'],
            'phone_no' => ['required', 'max:15'],
             'street_address' => ['required', 'max:255'],


        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
             'last_name' => $data['last_name'],
             'username' => $data['username'],

             'division_id' => $data['division_id'],
             'district_id' => $data['district_id'],
             'phone_no' => $data['phone_no'],
             'street_address' => $data['street_address'],
             'ip_address' => request()->ip(),
              'email' => $data['email'],


            'password' => Hash::make($data['password']),

        ]);
    }
}
