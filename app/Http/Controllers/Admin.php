<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Admin extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'login' => Auth::guard('admin')->user()->login,
            'tables' => Product::getTablesNames(),
            'money' => Product::sum('orders_products', 'price'),
            'users' => Product::countId('users'),
            'products' => Product::countId('products'),
            'buy' => Product::countId('orders')
        );

        return view('admin.dashboard')->with($data);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($table)
    {
        $column = Product::getColumnNames($table, 0);

        $data = array(
            'login' => Auth::guard('admin')->user()->login,
            'tables' => Product::getTablesNames(),
            'table_column' => $column,
            'table_name' => $table,
            'table_data' => Product::getTablesData($table, $column)
        );

        return view('admin.show')->with($data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($table, $id)
    {
        $column = Product::getColumnNames($table, 0);

        $data = array(
            'login' => Auth::guard('admin')->user()->login,
            'tables' => Product::getTablesNames(),
            'table_column' => $column,
            'table_name' => $table,
            'table_data' => Product::getTableData($table, $column, $id)
        );

        if ($table == 'products')
        {
            $data['column_id_cat'] = Product::whereLike('products_category', 'id', '______');
            $data['column_id_author'] = Product::selectRaw('products_authors', 'id, concat(name," ",surname) as name');
            $data['column_id_publishing'] = Product::table('products_publishing');
        }

        if ($table == 'products_items')
        {
            $data['column_id_products'] = Product::table('products');
        }

        return view('admin.edit')->with($data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add($table)
    {
        $column = Product::getColumnNames($table, 1);

        $data = array(
            'login' => Auth::guard('admin')->user()->login,
            'tables' => Product::getTablesNames(),
            'table_column' => $column,
            'table_name' => $table,
        );

        if ($table == 'products')
        {
            $data['column_id_cat'] = Product::whereLike('products_category', 'id', '______');
            $data['column_id_author'] = Product::selectRaw('products_authors', 'id, concat(name," ",surname) as name');
            $data['column_id_publishing'] = Product::table('products_publishing');
        }

        if ($table == 'products_items')
        {
            $data['column_id_products'] = Product::table('products');
        }

        return view('admin.add')->with($data);
    }

    public function add_save(Request $request)
    {
        $validator = $this->validator($request->all(), $request->table);

        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->input());
        }
        else
        {
            Product::saveAdd($request->all());

            return redirect('admin/show/'.$request->table)->withErrors(['success' => 'Dodawanie wpisu zakończono pomyślnie']);
        }
    }

    public function edit_save(Request $request)
    {
        $validator = $this->validator($request->all(), $request->table);

        if ($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput($request->input());
        }
        else
        {
            Product::saveEdit($request->all());

            return redirect('admin/show/'.$request->table)->withErrors(['success' => 'Edycja danych przebiegła pomyślnie']);
        }
    }

    protected function validator(array $data, $table)
    {
        $errors_msg = [
            'firm.required' => '[firm] Nazwa firmy jest wymagana',
            'firm.max' => '[firm] Nazwa firmy jest zbyt długa (max 255 znaków)',
            'address.required' => '[address] Adres pocztowy jest wymagany',
            'address.max' => '[address] Adres pocztowy jest zbyt długi (max 255 znaków)',
            'town.required' => '[town] Miasto wraz z numerem domu jest wymagane',
            'town.max' => '[town] Miasto wraz z numerem domu jest zbyt długie (max 255 znaków)',
            'email.required' => '[email] Email jest wymagany',
            'email.email' => '[email] Email ma niewłaściwy format (login@poczta.pl)',
            'email.max' => '[email] Email jest zbyt długi (max 255 znaków)',
            'phone.required' => '[phone] Numer telefonu jest wymagany',
            'phone.min' => '[phone] Numer telefonu jest zbyt krótki (min 8 cyfr)',
            'phone.max' => '[phone] Numer telefonu jest zbyt długi (max 9 cyfr)',
            'phone.regex' => '[phone] Numer telefonu ma niewłaściwy format (8-9 cyfr)',
            'service_name.required' => '[service_name] Nazwa serwisu jest wymagana',
            'service_name.max' => '[service_name] Nazwa serwisu jest zbyt długa (max 255 znaków)',
            'service_url.required' => '[service_url] Url serwisu jest wymagany',
            'service_url.max' => '[service_url] Url serwisu jest zbyt długi (max 255 znaków)',
            'service_url.regex' => '[service_url] Url serwisu ma niewłaściwy format (192.168.0.1)',
            'krs.required' => '[krs] Numer krs jest wymagany',
            'krs.regex' => '[krs] Numer krs ma niewłaściwy format (10 cyfr)',
            'krs_text.required' => '[krs_text] Wydział krs jest wymagany',
            'krs_text.max' => '[krs_text] Wydział krs jest zbyt długi (max 255 znaków)',
            'krs_text2.required' => '[krs_text2] Wysokość kapitału jest wymagana',
            'krs_text2.max' => '[krs_text2] Wysokość kapitału jest zbyt długa (max 255 znaków)',
            'nip.required' => '[nip] Numer nip jest wymagany',
            'nip.regex' => '[nip] Numer nip ma niewłaściwy format (000-00-00-000)',
            'regon.required' => '[regon] Numer regon jest wymagany',
            'regon.regex' => '[regon] Numer regon ma niewłaściwy format (9 cyfr)',
            'bank_name.required' => '[bank_name] Nazwa banku jest wymagana',
            'bank_name.max' => '[bank_name] Nazwa banku jest zbyt długa (max 255 znaków)',
            'bank_number.required' => '[bank_number] Numer konta bankowego jest wymagany',
            'bank_number.regex' => '[bank_number] Numer konta bankowego ma niewłaściwy format (00 0000 0000 0000 0000 0000 0000)',
            'office_person.required' => '[office_person] Osoba biurowa jest wymagana',
            'office_person.max' => '[office_person] Osoba biurowa jest zbyt długa (max 255 znaków)',
            'office_phone.required' => '[office_phone] Numer telefonu biurowego jest wymagany',
            'office_phone.min' => '[office_phone] Numer telefonu biurowego jest zbyt krótki (min 8 cyfr)',
            'office_phone.max' => '[office_phone] Numer telefonu biurowego jest zbyt długi (max 9 cyfr)',
            'office_phone.regex' => '[office_phone] Numer telefonu biurowego ma niewłaściwy format (8-9 cyfr)',
            'office_email.required' => '[office_email] Email biurowy jest wymagany',
            'office_email.email' => '[office_email] Email biurowy ma niewłaściwy format (login@poczta.pl)',
            'office_email.max' => '[office_email] Email biurowy jest zbyt długi (max 255 znaków)',
            'type.required' => '[type] Typ jest wymagany',
            'type.regex' => '[type] Podano złą wartość (1 lub 2)',
            'link.required' => '[link] Link jest wymagany',
            'link.max' => '[link] Link jest zbyt długi (max 255 znaków)',
            'link.regex' => '[link] Link ma niewłaściwy format (litery lub "/" lub "-", bez spacji czy cyfr czy innych znaków)',
            'title.required' => '[title] Tytuł jest wymagany',
            'title.max' => '[title] Tytuł jest zbyt długi (max 255 znaków)',
            'slug.required' => '[slug] Slug jest wymagany',
            'slug.max' => '[slug] Slug jest zbyt długi (max 255 znaków)',
            'slug.regex' => '[slug] Slug ma niewłaściwy format (litery lub "-", bez spacji czy cyfr czy innych znaków)',
            'sub_title.max' => '[sub_title] Podtytuł jest zbyt długi (max 255 znaków)',
            'preface.max' => '[preface] Wstęp jest zbyt długi (max 64850 znaków)',
            'content.required' => '[content] Zawartość jest wymagana',
            'meta_title.required' => '[meta_title] Meta-tytuł jest wymagany',
            'meta_title.max' => '[meta_title] Meta-tytuł jest zbyt długi (max 255 znaków)',
            'img_url.max' => '[img_url] Adres obrazu jest zbyt długi (max 255 znaków)',
            'img_alt.max' => '[img_alt] Opis obrazu jest zbyt długi (max 255 znaków)',
            'redirect_url.max' => '[redirect_url] Adres przekierowania jest zbyt długi (max 255 znaków)',
            'redirect_desc.max' => '[redirect_desc] Opis przekierowania jest zbyt długi (max 255 znaków)',
            'img_href.max' => '[img_href] Adres obrazu jest zbyt długi (max 255 znaków)',
            'img_href.required' => '[img_href] Adres obrazu jest wymagany',
            'img_alt.required' => '[img_alt] Opis obrazu jest wymagany',
            'is_promotion.required' => '[is_promotion] Status promocji jest wymagany',
            'is_promotion.regex' => '[is_promotion] Status promocji ma niewłaściwy format (0 lub 1)',
            'is_novelty.required' => '[is_novelty] Status nowości jest wymagany',
            'is_novelty.regex' => '[is_novelty] Status nowości ma niewłaściwy format (0 lub 1)',
            'is_bestseller.required' => '[is_bestseller] Status bestseller jest wymagany',
            'is_bestseller.regex' => '[is_bestseller] Status bestseller ma niewłaściwy format (0 lub 1)',
            'is_sellout.required' => '[is_sellout] Status wyprzedaży jest wymagany',
            'is_sellout.regex' => '[is_sellout] Status wyprzedaży ma niewłaściwy format (0 lub 1)',
            'name.required' => '[name] Nazwa jest wymagana',
            'name.max' => '[name] Nazwa jest zbyt długa (max 255 znaków)',
            'promotion_price.required' => '[promotion_price] Cena promocyjna jest wymagana',
            'promotion_price.regex' => '[promotion_price] Cena promocyjna ma niewłaściwy format (0.00)',
            'price.required' => '[price] Cena jest wymagana',
            'price.regex' => '[price] Cena ma niewłaściwy format (0.00)',
            'year_publication.required' => '[year_publication] Rok publikacji jest wymagany',
            'year_publication.regex' => '[year_publication] Rok publikacji ma niewłaściwy format (4 cyfry)',
            'description.required' => '[description] Opis jest wymagany',
            'description.max' => '[description] Opis jest zbyt długi (max 64850 znaków)',
            'details.required' => '[details] Szczegóły są wymagane',
            'surname.required' => '[surname] Nazwisko jest wymagane',
            'surname.max' => '[surname] Nazwisko jest zbyt długie (max 255 znaków)',
            'serial.required' => '[serial] Numer seryjny jest wymagany',
            'serial.max' => '[serial] Numer seryjny jest zbyt długi (max 255 znaków)',
            'value.required' => '[value] Wartość jest wymagana',
            'value.max' => '[value] Wartość jest zbyt długa (max 255 znaków)',
            'button_description.required' => '[button_description] Opis przycisku jest wymagany',
            'button_description.max' => '[button_description] Opis przycisku jest zbyt długi (max 255 znaków)',
        ];

        if ($table == 'sliders')
            return Validator::make($data, [
                'title' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string', 'max:64850'],
                'link' => ['required', 'string', 'max:255', 'regex:/^[a-z,A-Z,\/,\-]+$/'],
                'button_description' => ['required', 'string', 'max:255'],
                'img_href' => ['required', 'string', 'max:255'],
                'img_alt' => ['required', 'string', 'max:255'],
            ], $errors_msg);

        if ($table == 'products_sort')
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'value' => ['required', 'string', 'max:255'],
            ], $errors_msg);

        if ($table == 'products_limits')
            return Validator::make($data, [
                'value' => ['required', 'string', 'regex:/^\d+$/', 'max:255'],
            ], $errors_msg);

        if ($table == 'products_items')
            return Validator::make($data, [
                'serial' => ['required', 'string', 'max:255'],
            ], $errors_msg);

        if ($table == 'products_category')
            return Validator::make($data, [
                'title' => ['required', 'string', 'max:255'],
                'meta_title' => ['required', 'string', 'max:255'],
                'slug' => ['required', 'string', 'max:255', 'regex:/^[a-z,A-Z,-]+$/'],
            ], $errors_msg);

        if ($table == 'products_authors')
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'surname' => ['required', 'string', 'max:255'],
            ], $errors_msg);

        if ($table == 'products')
            return Validator::make($data, [
                'img_href' => ['required', 'string', 'max:255'],
                'img_alt' => ['required', 'string', 'max:255'],
                'is_promotion' => ['required', 'string', 'regex:/^[0-1]$/'],
                'is_novelty' => ['required', 'string', 'regex:/^[0-1]$/'],
                'is_bestseller' => ['required', 'string', 'regex:/^[0-1]$/'],
                'is_sellout' => ['required', 'string', 'regex:/^[0-1]$/'],
                'name' => ['required', 'string', 'max:255'],
                'promotion_price' => ['required', 'string', 'regex:/^\d+\.\d\d$/'],
                'price' => ['required', 'string', 'regex:/^\d+\.\d\d$/'],
                'year_publication' => ['required', 'string', 'regex:/^\d{4}$/'],
                'description' => ['required', 'string', 'max:16500000'],
                'details' => ['required', 'string', 'max:16500000'],
            ], $errors_msg);

        if ($table == 'pages')
            return Validator::make($data, [
                'slug' => ['required', 'string', 'max:255', 'regex:/^[a-z,A-Z,-,_]+$/'],
                'sub_title' => ['max:255'],
                'title' => ['required', 'string', 'max:255'],
                'preface' => ['max:64850'],
                'content' => ['required', 'string', 'max:16500000'],
                'meta_title' => ['required', 'string', 'max:255'],
                'img_url' => ['max:255'],
                'img_alt' => ['max:255'],
                'redirect_url' => ['max:255'],
                'redirect_desc' => ['max:255'],
            ], $errors_msg);

        if ($table == 'pages')
            return Validator::make($data, [
                'slug' => ['required', 'string', 'max:255', 'regex:/^[a-z,A-Z,-]+$/'],
                'sub_title' => ['max:255'],
                'title' => ['required', 'string', 'max:255'],
                'preface' => ['max:64850'],
                'content' => ['required', 'string', 'max:16500000'],
                'meta_title' => ['required', 'string', 'max:255'],
                'img_url' => ['max:255'],
                'img_alt' => ['max:255'],
                'redirect_url' => ['max:255'],
                'redirect_desc' => ['max:255'],
            ], $errors_msg);

        if ($table == 'menu')
            return Validator::make($data, [
                'type' => ['required', 'string', 'regex:/^[1-2]$/'],
                'link' => ['required', 'string', 'max:255', 'regex:/^[a-z,A-Z,\/,\-]+$/'],
                'title' => ['required', 'string', 'max:255'],
            ], $errors_msg);

        if ($table == 'config')
            return Validator::make($data, [
                'firm' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'town' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'phone' => ['required', 'string', 'min:8', 'max:9', 'regex:/^\d{8}\d?$/'],
                'service_name' => ['required', 'string', 'max:255'],
                'service_url' => ['required', 'string', 'regex:/^\d{2}\d?\.\d\d?\d?\.\d\d?\d?\.\d\d?\d?$/'],
                'krs' => ['required', 'string', 'regex:/^\d{10}$/'],
                'krs_text' => ['required', 'string', 'max:255'],
                'krs_text2' => ['required', 'string', 'max:255'],
                'nip' => ['required', 'string', 'regex:/^\d\d\d-\d\d-\d\d-\d\d\d$/'],
                'regon' => ['required', 'string', 'regex:/^\d{9}$/'],
                'bank_name' => ['required', 'string', 'max:255'],
                'bank_number' => ['required', 'string', 'regex:/^\d\d \d\d\d\d \d\d\d\d \d\d\d\d \d\d\d\d \d\d\d\d \d\d\d\d$/'],
                'office_person' => ['required', 'string', 'max:255'],
                'office_phone' => ['required', 'string', 'min:8', 'max:9', 'regex:/^\d{8}\d?$/'],
                'office_email' => ['required', 'string', 'email', 'max:255'],
            ], $errors_msg);
    }
}
