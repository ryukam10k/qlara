<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\User;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function localLogin()
    {
        return view('auth/localLogin');
    }

    public function socialLogin($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function handleProviderCallback($social)
    {
        $userSocial = Socialite::driver($social)->stateless()->user();
        //dd($userSocial);
        $user = User::where(['email' => $userSocial->getEmail()])->first();

        if ($user) {
            Auth::login($user);
            return redirect('/deal');
        } else {
            $newUser = new User;
            $newUser->name = $userSocial->getName();
            $newUser->email = $userSocial->getEmail();
            $newUser->password = null;
            $newUser->customer_id = 1; // とりあえず対象外に
            $newUser->role_id = 1; // 一般ユーザー
            $newUser->save();

            Auth::login($newUser, true);
            return redirect('/deal');
        }
    }
}
