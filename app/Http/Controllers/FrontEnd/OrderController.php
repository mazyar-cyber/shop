<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Order_Product;
use App\Models\Orders;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Orders();
        $order->user_id = Auth::id();
        $order->status = '0';
        $money = app('App\Http\Controllers\FrontEnd\CouponController')->calcPrice();
        if (count($money) <= 0) {
            return redirect()->back();
        }
        $order->amount = $money[0]['payablePrice'];
        $order->save();

        foreach ($money[0]['products_id'] as $pro) {
            $order_product = new Order_Product();
            $order_product->order_id = $order->id;
            $order_product->product_id = $pro[0];
            $order_product->qty = $pro[1];
            $order_product->save();
        }


        $payment = new Payment((string)$money[0]['payablePrice'], $order->id);
        $result = $payment->doPayment();
        if ($result->Status == 100) {
            return redirect()->to('https://sandbox.zarinpal.com/pg/StartPay/' . $result->Authority);
        } else {
            echo 'ERR: ' . $result->Status;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
