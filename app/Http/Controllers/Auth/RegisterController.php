<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\Institution;

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
    protected $redirectTo = '/apply';

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone'=>['required', 'string', 'max:15', 'unique:institutions'],
            'position'=>['required', 'string', 'max:200'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'name_english' =>['required', 'string', 'min:5','max:200'],
            'name_other' =>['required', 'string', 'min:5','max:200'],
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
       $user = User::create([
           'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // $institution = new Institution([
        //     'phone' => $data['phone'],
        //     'position'=> $data['position'],
        //     'name_english' => $data['name_english'],
        //     'name_other' => $data['name_other'],
        //     'application_id' => 45,
        // ]);
        $institution = new Institution;
        $institution->phone = $data['phone'];
        $institution->position = $data['position'];
        $institution->name_english = $data['name_english'];
        $institution->name_other = $data['name_other'];
        $institution->application_id = 'AAU/OMU/'.$user->id;
        $user->institutions()->save($institution);
        return $user;
    }
}
