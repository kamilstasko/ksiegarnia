<?php

namespace App\Http\Controllers\Pages;
use App\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Product as ProductModel;
use Illuminate\Support\Facades\Validator;

class Product extends Controller
{
    public function index(Request $request, $slug, $slug2 = '')
    {
        if ($slug2 != '')
            $slug .= '/' . $slug2;

        $check = ProductModel::count('products_category', 'slug', $slug);
        if (!$check)
            return redirect()->route('404');

        if($request->ajax()){
            if (str_contains($request->slug, '/'))
                $request->slug = explode('/', $request->slug)[1];

            $data = $request->slug . '?';
            $data .= 'limit='.$request->limit;
            $data .= '&phrase='.$request->phrase;
            $data .= '&sort='.$request->sort;
            $data .= '&priceRange='.$request->priceRange;
            $data .= '&dateRange='.$request->dateRange;

            if ($request->author){
                $data .= '&author=';
                $authors = explode('&', $request->author);
                foreach ($authors as $author) {
                    $author = str_replace('author=', '', $author);
                    $data .= $author . ',';
                }
            }

            if ($request->publishing){
                $data .= '&publishing=';
                $publishing = explode('&', $request->publishing);
                foreach ($publishing as $pub) {
                    $pub = str_replace('publishing=', '', $pub);
                    $data .= $pub . ',';
                }
            }

            return $data;
        }

        if (!isset($request['limit']))
            $request['limit'] = 12;

        if (!isset($request['sort']))
            $request['sort'] = 'date,desc';

        if (!isset($request['priceRange']))
            $request['priceRange'] = '0;'.ProductModel::max('price');

        if (!isset($request['author']))
            $request['author'] = 0;

        if (!isset($request['publishing']))
            $request['publishing'] = 0;

        if (!isset($request['dateRange']))
            $request['dateRange'] = ProductModel::min('year_publication').';'.ProductModel::max('year_publication');

        $sort = explode(',', $request['sort']);
        $price = explode(';', $request['priceRange']);
        $authors = explode(',', $request['author']);
        $publishing = explode(',', $request['publishing']);
        $date = explode(';', $request['dateRange']);

        if (!isset($request['phrase']))
            $request['phrase'] = '';

        if (Auth::check() and $slug != 'list')
            ProductModel::addRecommendationCategory($slug, Auth::user()->getAuthIdentifier());

        $data = array(
            'isHomepage' => false,
            'config' => Controller::config(),
            'data' => (array)ProductModel::slug($slug),
            'products' => ProductModel::getProducts($slug, $request['limit'], $sort[0], $sort[1], $price[0], $price[1], $authors, $publishing, $date[0], $date[1], $request['phrase']),
            'sorting' => ProductModel::table('products_sort'),
            'limits' => ProductModel::table('products_limits'),
            'phrase' => $request['phrase'],
            'categories' => ProductModel::getCategories($slug),
            'filters' => [
                [
                    'desc' => 'Cena',
                    'name' => 'priceRange',
                    'min_name' => 'priceMin',
                    'min_value' => 0,
                    'max_name' => 'priceMax',
                    'max_value' => ProductModel::max('price')
                ],
                [
                    'desc' => 'Autor',
                    'name' => 'author',
                    'options' => ProductModel::getAuthors($slug)
                ],
                [
                    'desc' => 'Wydawnictwo',
                    'name' => 'publishing',
                    'options' => ProductModel::getPublishings($slug)
                ],
                [
                    'desc' => 'Rok wydania',
                    'name' => 'dateRange',
                    'min_name' => 'dateMin',
                    'min_value' => ProductModel::min('year_publication'),
                    'max_name' => 'dateMax',
                    'max_value' => ProductModel::max('year_publication')
                ]
            ],
        );

        return view('products.list')->with($data, $request);
    }

    public function item($slug, $slug2, $slug3, $slug4 = '')
    {
        if ($slug4 != '')
        {
            $check = ProductModel::countWhere('products_items', 'id', $slug4, 'id_products', $slug3);
            if (!$check)
                return redirect()->route('404');

            $quantity = 1;
        }
        else
        {
            $check = ProductModel::count('products', 'id', $slug3);
            if (!$check)
                return redirect()->route('404');

            $quantity = 0;
        }

        $product = ProductModel::allId($slug3);

        if (Auth::check())
            ProductModel::addRecommendationProducts($product->id, Auth::user()->getAuthIdentifier());

        $data = array(
            'isHomepage' => false,
            'config' => Controller::config(),
            'data' => [
                'meta_title' => $product->name,
                'slug' => $product->id,
                'slug_item' => $slug4,
                'slug_full' => 'product/'.$slug.'/'.$slug2.'/'.$slug3.'/'.$slug4,
                'title' => $product->name
            ],
            'product' => (array)$product,
            'recommended' => ProductModel::recommended(Auth::check()),
            'quantity' => $quantity,
            'descriptions' => [
                [
                    'id' => 1,
                    'title' => 'Opis',
                    'content' => ProductModel::selectWhere('description', 'id', $slug3)[0]->description
                ],
                [
                    'id' => 2,
                    'title' => 'Szczegóły',
                    'content' => ProductModel::selectWhere('details', 'id', $slug3)[0]->details
                ],
            ],
            'items' => ProductModel::whereRaw('products_items', '*','id_products', $product->id),
            'disabled_days' => ProductModel::disableDays($slug4),
            'slug' => 'product/' . $slug . '/' . $slug2 . '/' . $slug3
        );

        return view('products.details')->with($data);
    }

    public function changeItem(Request $request)
    {
        return $request->item;
    }

    public function addToCart(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'date_start' => ['required', 'regex:/^[0-3]\d-[0-1]\d-20\d\d$/'],
            'date_end' => ['required', 'regex:/^[0-3]\d-[0-1]\d-20\d\d$/']
        ],[
            'date_start.required' => 'Wybierz datę rozpoczęcia',
            'date_end.required' => 'Wybierz datę zakończenia',
            'date_start.regex' => 'Podaj poprawną datę rozpoczęcia',
            'date_end.regex' => 'Podaj poprawną datę zakończenia',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()]);
        }
        else
        {
            if (Auth::user())
            {
                $date_start = explode('-', $request->date_start);
                $date_start = $date_start[2] . '-' . $date_start[1] . '-' . $date_start[0];
                $date_end = explode('-', $request->date_end);
                $date_end = $date_end[2] . '-' . $date_end[1] . '-' . $date_end[0];

                if ($result = ProductModel::reservation(Auth::user()->getAuthIdentifier(), $request->id_item, $date_start, $date_end))
                {
                    $product = ProductModel::allItem($request->id_item);
                    $oldCart = Session::has('cart') ? Session::get('cart') : null;
                    $cart = new Cart($oldCart);
                    $cart->add($product, $request->final_price, $request->date_start, $request->date_end, $result[0], $result[1]);
                    $request->session()->put('cart', $cart);

                    return response()->json(['time' => $result[0]]);
                }
                else
                {
                    return response()->json(['errors'=>'reservation']);
                }
            }
            else
            {
                return response()->json(['errors'=>'login']);
            }

        }
    }
}
