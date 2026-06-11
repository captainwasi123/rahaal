<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Helpers\Mailer;
use Auth;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(): RedirectResponse
    {
        $user = Socialite::driver('google')->stateless()->user();

        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            $existingUser->google_id = $user->id;
            $existingUser->save();

            Session::put('welcomeMessageShown', true);

            auth()->login($existingUser, true);
        } else {
            // Create a new user.
            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->google_id = $user->id;
            $newUser->email_verified = '1';
            $newUser->password = bcrypt(request(Str::random()));
            $newUser->save();


            Session::put('welcomeMessageShown', true);
            // Log in the new user.
            auth()->login($newUser, true);

            //Mailer::sendMail('Welcome to DCM!', $newUser->email, $newUser->name, 'web.emailers.welcome_user', ['name' => $newUser->name, 'email' => $newUser->email]);
            //Mailer::sendMail('Reffer your friends and earn more!', $user->email, $user->name, 'web.emailers.referral_email', ['name' => $user->name, 'email' => $user->email]);
        }

        return redirect()->intended('/user/dashboard')->with('success', 'Login Successfull.');
    }
}
