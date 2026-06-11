<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Helpers\Mailer;
use Auth;

class UserController extends Controller
{
    
    public function index(){
        $data['menu'] = 'dashboard';


        return view('users.dashboard')->with($data);
    }


    public function create(Request $request)
    {
        $data = $request->all();
        $response = [];

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8'
        ]);

        $user = User::create($data);

        $data['otp'] = strval($user->email_otp);

        Auth::login($user);


        $mail = Mailer::sendMail('Email Verification | Rahaal - The Explorer', array($data['email']), 'Rahaal', 'web.emails.email_otp', $data);

        $response['success'] = 'success';
        $response['message'] = 'Success! You are successfully logged in.';

        return response()->json($response, 200);
    }

    public function login(Request $request){
        $data = $request->all();
        $response = [];
        $error_code = 200;
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {


            $error_code = 200;
            $response['success'] = 'success';
            $response['message'] = 'Success! You are successfully logged in.';
        } else {

            $error_code = 49;
            $response['success'] = 'error';
            $response['message'] = 'Incorrect email or password.';
        }


        return response()->json($response, $error_code);
    }


    public function logout(){

        Auth::logout();
        return redirect('/');
    }

    public function verify_email(Request $request)
    {
        $data = $request->all();
        $response = [];

        $validated = $request->validate([
            'email_otp' => 'required'
        ]);

        if (Auth::user()->email_otp == $data['email_otp']) {
            $u = User::find(Auth::id());
            $u->email_verified = '1';
            $u->save();

            $response['success'] = 'success';
            $response['message'] = 'Success! Email successfully Verified.';
        } else {

            $response['success'] = 'error';
            $response['message'] = 'Incorrect OTP! Please try again.';
        }


        echo json_encode($response);
    }
}
