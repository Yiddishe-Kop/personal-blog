<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller {
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
    protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectToProvider() {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback() {
        $userSocial = Socialite::driver('github')->user();

        $users = User::where(['email' => $userSocial->getEmail()])->first();

        if ($users) {

            Auth::login($users);

        } else {
            $userData = [
                'name' => $userSocial->getName(),
                'email' => $userSocial->getEmail(),
                'avatar' => $userSocial->getAvatar(),
            ];

            $user = User::create($userData);

            Auth::login($user);
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }
}
