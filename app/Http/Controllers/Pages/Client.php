<?php

namespace App\Http\Controllers\Pages;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use \App\Product;

class Client extends Controller
{
    public function index($slug)
    {
        $check = DB::table('pages')->where('slug', $slug)->count();
        if (!$check)
            return redirect()->route('404');

        $data = array(
            'isHomepage' => false,
            'config' => Controller::config(),
            'data' => Controller::dataPages($slug),
            'orders' => Product::showOrders(Auth::user()->getAuthIdentifier()),
        );

        return view('client.'.$slug)->with($data);
    }

    public function updateRate(Request $request)
    {
        if($request->ajax()){
            if (isset($request->id) and isset($request->rate))
                Product::changeRate($request->id, $request->rate);

            return "ok";
        }
    }

    protected function validator_edit(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'regex:/^\d\d-\d\d\d$/'],
            'locality' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:0', 'size:9']
        ],[
            'name.required' => 'Pole nie może być puste',
            'surname.required' => 'Pole nie może być puste',
            'email.required' => 'Pole nie może być puste',
            'address.required' => 'Pole nie może być puste',
            'code.required' => 'Pole nie może być puste',
            'locality.required' => 'Pole nie może być puste',
            'phone.required' => 'Pole nie może być puste',
            'email.email' => 'Niepoprawny adres e-mail',
            'code.regex' => 'Kod nie jest poprawny (np. 33-222)',
            'phone.size' => 'Błędna długość numeru (9 cyfr)'
        ]);
    }

    public function edit(Request $request)
    {
        $this->validator_edit($request->all())->validate();

        $check = DB::table('users')->where('email', $request->email)->count();
        if($check)
        {
            DB::table('users')
                ->where('id', Auth::user()->id)
                ->update([
                    'name' => $request->name,
                    'surname' =>  $request->surname,
                    'address' =>  $request->address,
                    'code' =>  $request->code,
                    'locality' =>  $request->locality,
                    'phone' =>  $request->phone
                ]);
        }
        else
        {
            DB::table('users')
                ->where('id', Auth::user()->id)
                ->update([
                    'name' => $request->name,
                    'surname' =>  $request->surname,
                    'email' =>  $request->email,
                    'address' =>  $request->address,
                    'code' =>  $request->code,
                    'locality' =>  $request->locality,
                    'phone' =>  $request->phone,
                    'email_verified_at' => NULL
                ]);
        }

        return redirect("email/resend");
    }

    protected function validator_change_password(array $data)
    {
        return Validator::make($data, [
            'password_old' => ['required', 'string', 'min:6'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ],[
            'password_old.required' => 'Pole nie może być puste',
            'password_old.min' => 'Pole powinno zawierac co najmniej 6 znaków',
            'password.required' => 'Pole nie może być puste',
            'password.min' => 'Pole powinno zawierac co najmniej 6 znaków',
            'password.confirmed' => 'Wartości nie są identyczne'
        ]);
    }

    public function change_password(Request $request){
        $this->validator_change_password($request->all())->validate();

        if (Hash::check($request->password_old, Auth::user()->getAuthPassword()))
        {
            DB::table('users')->where('id', Auth::user()->id)->update(['password' => Hash::make($request->password),]);
            return redirect("/statement/change-password");
        }
        else
            return redirect()->back()->withErrors(['password_old' => 'Błędne hasło użytkownika']);
    }
}
