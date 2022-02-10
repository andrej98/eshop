<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Delivery;
use App\Product;
use App\Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function modifyCart(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric',
            'button' => 'string'
        ]);

        if ($validator->fails()) {
            $amount = 1;
        }else{
            $amount = $request->amount;
        }

        $product = Product::find($id);
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        if($request->button == 'remove'){
            $cart->minus($product, $product->id, $amount);
        }
        else if($request->button == 'delete'){
            $cart->delete($product->id);
        }
        else{
            $cart->plus($product, $product->id, $amount);
        }

        $request->session()->put('cart', $cart);

        if($request->session()->get('cart')->quantity == 0){
            $request->session()->forget('cart');
        }

        return back();
    }


    public function cart1(Request $request){
        if(!$request->session()->has('cart')){
            return view('cart.cart1', ['product' => null]);
        }
        $oldCart = $request->session()->get('cart');
        $cart = new Cart($oldCart);
        // dd($cart);
        return view('cart.cart1', ['products' => $cart->items, 'totalPrice'=>$cart->total]);
    }

    public function cart2(Request $request){
        $deliveries = Delivery::all();
        $payments = Payment::all();
        $oldCart = $request->session()->get('cart');
        $cart = new Cart($oldCart);

        $dPrice = 0;
        $pPrice = 0;
        if($request->session()->has('delivery')){
            $dPrice = $request->session()->get('delivery')->price;
        }
        if($request->session()->has('payment')){
            $pPrice = $request->session()->get('payment')->price;
        }

        return view('cart.cart2', ['totalPrice'=>$cart->total, 'deliveries'=>$deliveries, 'payments'=>$payments, 'pPrice'=>$pPrice, 'dPrice'=>$dPrice]);
    }

    public function cart3(Request $request){
        $oldCart = $request->session()->get('cart');
        $cart = new Cart($oldCart);

        $dPrice = 0;
        $pPrice = 0;
        if($request->session()->has('delivery')){
            $dPrice = $request->session()->get('delivery')->price;
        }
        if($request->session()->has('payment')){
            $pPrice = $request->session()->get('payment')->price;
        }

        return view('cart.cart3', ['totalPrice'=>$cart->total, 'pPrice'=>$pPrice, 'dPrice'=>$dPrice]);
    }

    public function deliveryPayment(Request $request){
        $deliveries = Delivery::all();
        $payments = Payment::all();
        $deliveryNames = [];
        foreach($deliveries as $delivery){
            array_push($deliveryNames, $delivery->name);
        }
        $deliveryNames = implode(",", $deliveryNames);

        $paymentNames = [];
        foreach($payments as $payment){
            array_push($paymentNames, $payment->name);
        }
        $paymentNames = implode(",", $paymentNames);


        $request->validate([
            'doprava' => 'required|in:'.$deliveryNames,
            'platba' => 'required|in:'.$paymentNames
        ]);

        $selectedPayment = Payment::select('id','name','price')->where('name',$request->platba)->get()[0];
        $selectedDelivery = Delivery::select('id','name','price')->where('name', $request->doprava)->get()[0];

        $request->session()->put('delivery', $selectedDelivery);
        $request->session()->put('payment', $selectedPayment);

        return back();
    }
}
