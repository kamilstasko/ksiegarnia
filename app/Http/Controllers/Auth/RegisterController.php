<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/email/verify';

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
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'address' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'regex:/^\d\d-\d\d\d$/'],
            'locality' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:0', 'size:9'],
            'agreement1' => ['required'],
            'agreement2' => ['required'],
            'agreement3' => ['required'],
        ],[
            'name.required' => 'Pole nie może być puste',
            'surname.required' => 'Pole nie może być puste',
            'email.required' => 'Pole nie może być puste',
            'password.required' => 'Pole nie może być puste',
            'address.required' => 'Pole nie może być puste',
            'code.required' => 'Pole nie może być puste',
            'locality.required' => 'Pole nie może być puste',
            'phone.required' => 'Pole nie może być puste',
            'email.email' => 'Niepoprawny adres e-mail',
            'email.unique' => 'Konto z podanym adresem e-mail już istnieje',
            'password.min' => 'Pole powinno zawierac co najmniej 6 znaków',
            'password.confirmed' => 'Wartości nie są identyczne',
            'code.regex' => 'Kod nie jest poprawny (np. 33-222)',
            'phone.size' => 'Błędna długość numeru (9 cyfr)',
            'agreement1.required' => 'Musisz zaakceptować regulamin',
            'agreement2.required' => 'Musisz zaznaczyć pole',
            'agreement3.required' => 'Musisz zaznaczyć pole'
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
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'code' => $data['code'],
            'locality' => $data['locality'],
            'phone' => $data['phone'],
            'email_verified_at' => NULL,
            'remember_token' => NULL
        ]);
    }

    public function showRegistrationForm()
    {
        $data = array(
            'isHomepage' => false,
            'config' => Controller::config(),
            'data' => Controller::dataPages('register')
        );

        return view('auth.register')->with($data);
    }
}
