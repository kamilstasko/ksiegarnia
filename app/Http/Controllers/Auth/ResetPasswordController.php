<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/statement/reset-password-complete';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showResetForm(Request $request, $token = null)
    {
        $data = array(
            'isHomepage' => false,
            'config' => Controller::config(),
            'data' => Controller::dataPages('reset-password'),
            'token' => $token,
            'email' => $request->email
        );

        return view('auth.passwords.reset')->with($data);
    }

    protected function validationErrorMessages()
    {
        return [
            'password.confirmed' => 'Hasła nie pasują do siebie',
            'password.min' => 'Hasło musi mieć co najmniej 6 znaków',
        ];
    }
}
