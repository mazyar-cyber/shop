<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Orders;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\String_;

class PaymentController extends Controller
{
    public function verify(Request $request, $id)
    {
        $money = app('App\Http\Controllers\FrontEnd\CouponController')->calcPrice();
        $payment = new Payment((string)$money[0]['payablePrice']);
        $result = $payment->verifyPayment((string)$request->Authority, $request->Status);
        if ($result) {
            $order = Orders::findOrfail($id);
            $order->status = 1;
            $order->save();
            $newPayment = new Payment((string)$money[0]['payablePrice']);
            $newPayment->authority = $request->Authority;
            $newPayment->status = $request->Status;
            $newPayment->RefId = $result->RefID;
            $newPayment->order_id = $id;
            $newPayment->save();
            $userBasket = Basket::where('user_id', Auth::id())->get();
            foreach ($userBasket as $b) {
                $b->delete();
            }
            \Illuminate\Support\Facades\Session::flash('payment-successful', "خرید شما با موفقیت انجام شد و طی دو روز آینده به آدرس داده شد تحویل داده خواهدشد");
        } else {
            \Illuminate\Support\Facades\Session::flash('payment-error', "در پرداخت شما مشکل پیش آمد دوباره تلاش نمایید!");

        }
        return redirect()->to('/cart');
    }
}
