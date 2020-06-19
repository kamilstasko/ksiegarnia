<?php

namespace App\Http\Controllers\Pages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Cart as SessionCart;
use \App\Product;

class Cart extends Controller
{
    public function index()
    {
        $reservation = 0;

        if (Session::has('cart'))
        {
            $oldCart = Session::get('cart');
            $cart = new SessionCart($oldCart);

            foreach ($cart->products as $key => $value)
            {
                if(!Product::count('orders_reservations', 'id', $key))
                {
                    $cart->changeReservation($key);
                    Session::put('cart', $cart);
                    $reservation = 1;
                }
            }
        }

        $data = array(
            'isHomepage' => false,
            'config' => Controller::config(),
            'data' => Controller::dataPages('cart'),
            'step' => 1,
        );

        return view('cart/view')->with($data + ['reservation' => $reservation]);
    }

    public function form(Request $request)
    {
        if ($request->remove)
        {
            if (Session::has('cart'))
            {
                $oldCart = Session::get('cart');
                $cart = new SessionCart($oldCart);

                if(Product::count('orders_reservations', 'id', $request->remove))
                {
                    Product::delete('orders_reservations', 'id', $request->remove);
                }

                $cart->del($request->remove);
                Session::put('cart', $cart);
            }

            return $this->index();
        }

        if ($request->submitOrder)
        {
            $reservation = 1;

            if (Session::has('cart'))
            {
                $oldCart = Session::get('cart');
                $cart = new SessionCart($oldCart);

                foreach ($cart->products as $key => $value)
                {
                    if($time = Product::updateReservation($key))
                    {
                        $cart->changeReservation($key, $time);
                        Session::put('cart', $cart);
                    }
                    else{
                        $reservation = 0;
                    }
                }
            }

            if ($reservation)
            {
                $data = array(
                    'isHomepage' => false,
                    'config' => Controller::config(),
                    'data' => Controller::dataPages('cart'),
                    'step' => 2,
                    'comments' => $request->comments
                );

                return view('cart/view')->with($data + ['reservation' => $reservation]);
            }
        }

        return $this->index();
    }

    public function save(Request $request)
    {
        if (Session::has('cart'))
        {
            $oldCart = Session::get('cart');
            $cart = new SessionCart($oldCart);

            $check = 1;

            foreach ($cart->products as $key => $value)
            {
                if(!Product::count('orders_reservations', 'id', $key))
                {
                    $check = 0;
                    break;
                }
            }

            if($check)
            {
                $id = Product::order(Auth::user()->getAuthIdentifier(), $request->comments);

                foreach ($cart->products as $key => $value)
                {
                    $date_start = explode('-', $value['date_rental']);
                    $date_start = $date_start[2] . '-' . $date_start[1] . '-' . $date_start[0];
                    $date_end = explode('-', $value['date_return']);
                    $date_end = $date_end[2] . '-' . $date_end[1] . '-' . $date_end[0];

                    Product::orderProduct($id, $value['product']->id_item, $date_start, $date_end, $value['price']);

                    $cart->del($key);
                }

                Session::put('cart', $cart);
            }
            else{
                $this->index();
            }
        }

        $data = array(
            'isHomepage' => false,
            'config' => Controller::config(),
            'data' => Controller::dataPages('cart'),
            'step' => 3
        );

        return view('cart/view')->with($data);
    }
}
