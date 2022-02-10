<?php

namespace App;

class Cart
{
    public $items = null;
    public $quantity = 0;
    public $total = 0;

    public function __construct($cart)
    {
        if($cart){
            $this->items = $cart->items;
            $this->quantity = $cart->quantity;
            $this->total = $cart->total;
        }
    }

    public function minus($item, $id, $amount){

        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
                $storedItem['qty'] -= $amount;
                $storedItem['price'] = $item->price * $storedItem['qty'];
                if($storedItem['qty'] == 0){
                    unset($this->items[$id]);
                }else{
                    $this->items[$id] = $storedItem;
                }
                $this->quantity -= $amount;
                $this->total -= $item->price * $amount;
            }
        }
    }

    public function plus($item, $id, $amount){

        if($this->items && array_key_exists($id, $this->items)){
            $newItem = $this->items[$id];
        }
        else{
            $newItem = ['item' => $item, 'price'=> $item->price, 'qty' => 0,];
        }
        $newItem['qty'] += $amount;
        $newItem['price'] = $item->price * $newItem['qty'];
        $this->items[$id] = $newItem;
        $this->quantity += $amount;
        $this->total += $item->price * $amount;
    }

    public function delete($id){

        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];

                unset($this->items[$id]);

                $this->quantity -= $storedItem['qty'];
                $this->total -= $storedItem['price'];
            }
        }
    }
}
