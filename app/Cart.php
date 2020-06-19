<?php

namespace App;

class Cart
{
    public $products = null;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart) {
            $this->products = $oldCart->products;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function changeReservation($id, $value = 0)
    {
        $this->products[$id]['reservation'] = $value;
    }

    public function add($product, $cost, $start, $end, $reservation, $id)
    {
        $storedProduct = ['price' => $cost, 'product' => $product, 'date_rental' => $start, 'date_return' => $end, 'reservation' => $reservation];
        $storedProduct['price'] = number_format($storedProduct['price'], 2);
        $this->products[$id] = $storedProduct;
        ++$this->totalQuantity;
        $this->totalPrice += $cost;
        $this->totalPrice = number_format($this->totalPrice, 2);
    }

    public function del($id)
    {
        if (array_key_exists($id, $this->products)) {
            $this->totalPrice -= $this->products[$id]['price'];
            --$this->totalQuantity;
            unset($this->products[$id]);
        }
    }
}
