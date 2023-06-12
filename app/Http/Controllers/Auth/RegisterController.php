<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserWallet;
use App\Models\MngMode;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;// Use the Str class here
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;

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


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/activate';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', [
            'except' => 'logout',
        ]);
    }

    public function index($role = 'worker')
    {
        return view('auth.register')->with(['role' => $role]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
                'email'                 => 'required|email|max:255|unique:users',
                'password'              => 'required|min:6|max:30|confirmed',
                'password_confirmation' => 'required|same:password',
                
            ],
            [
                'email.required' => 'Email field is required.',
                'email.unique' => 'Email has already been received.',
                'email.email' => 'Email must be a valid email address.',
                'email.max' => 'Email should not exceed 8 characters.',

                'password.required' => 'Password field is required.',
                'password.min' => 'Password must be at least 6 characters.',
                'password.max' => 'Password must be 30 characters or less.',
                'password.confirmed' => 'Password confirmation does not match.',

                'password_confirmation.required' => 'The password confirmation field is required.',
                'password_confirmation.same' => 'Confirm password and password must match.',

            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());
        
        Auth::login($user);
        

        return redirect()->route('home');
    }

    protected function create(array $data)
    {
       
        $data['password'] = Hash::make($data['password']);
        $data['role'] = 'user';
        $data['email_verification_token'] = Str::random(60);
       

       
        $user = User::create($data);
        $user->role=$data['role'];
        $user->email_verification_token=$data['email_verification_token'] ;

        // Send the email verification link
    // Mail::to($user->email)->send(new VerifyEmail($user));


        $user->save(); 
        $userWallet = new UserWallet([
            'user_id' => $user->id,
            'wallet_balance' => 0.00,
        ]);

        $userWallet->save();
        // $wallet = new Wallet();
        // $wallet->user_id = $user->id;
        // $wallet->balance = 0;
        // $wallet->save();

        return $user;
    }

}
