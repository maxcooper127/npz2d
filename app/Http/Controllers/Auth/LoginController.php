<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    //Recaptcha validation
//$response = Zttp::asFormParams()->post('https://www.google.com/recaptcha/api/siteverify', [
//'secret' => config('services.recaptcha.secret'),
//'response' => $request->input('g-recaptcha-response'),
//'remote_ip' => $_SERVER['REMOTE_ADDR'],
//]);
//
//if ($response->json()['success'])
//{
//$this->validate($request, [
//$this->username() => 'required|string',
//'password' => 'required|string',
//]);
//}
//
//else {
//    throw  new \Exception('Recaptcha failed');
//}
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
}
