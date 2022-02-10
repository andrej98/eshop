<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Payment;
use App\Delivery;
use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        // $this->middleware('subscribed')->except(['store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $oldCart = $request->session()->get('cart');
        $cart = new Cart($oldCart);

        // $dPrice = 0;
        // $pPrice = 0;
        // $deliveryId = 0;
        // $paymentId =0;
        $delivery = $request->session()->get('delivery');
        $payment = $request->session()->get('payment');
        //overit ci nevymazal session
        // if($request->session()->has('delivery')){
        //     $dPrice = $request->session()->get('delivery')->price;
        //     $deliveryId = $request->session()->get('delivery')->id;
        // }
        // if($request->session()->has('payment')){
        //     $pPrice = $request->session()->get('payment')->price;
        //     $paymentId = $request->session()->get('payment')->id;
        // }
        $totalPrice = $cart->total + $delivery->price + $payment->price;

        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|regex:/[0-9]{10}/',
            'address' => 'required',
            'email2' => 'required:email'
        ]);

        if (Auth::check())
        {
            $userId = Auth::id();
        }
        else{
            $userId = null;
        }


        $order = Order::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email2,
            'user_id' => $userId,
            'delivery_id' => $delivery->id,
            'payment_id' => $delivery->id,
            'state'=> 'ordered',
            'total' => $totalPrice
        ]);

        foreach($cart->items as $product){
            $order->products()->attach([$product['item']->id => ['amount' => $product['qty']]]);
        }
        $request->session()->forget('delivery');
        $request->session()->forget('payment');
        $request->session()->forget('cart');

        return view('order.thankyou', ['products' => $cart->items, 'order'=>$order, 'delivery'=>$delivery, 'payment'=> $payment]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
