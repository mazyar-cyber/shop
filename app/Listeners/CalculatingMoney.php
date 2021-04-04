<?php

namespace App\Listeners;

use App\Events\CalcMoneyEvent;
use App\Models\Basket;
use App\Models\Coupons;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

class CalculatingMoney
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CalcMoneyEvent  $event
     * @return array
     */
    public function handle(CalcMoneyEvent $event)
    {
        $user = Auth::user();
        $user_products_price = 0;
        $userBasket = Basket::where('user_id', Auth::id())->get();
        //calculating total products price  of user's order
        if (count($userBasket) > 0) {
            foreach ($userBasket as $b) {
                $price = (($b->product->price) - ($b->product->discount_price)) * $b->count;
                $user_products_price = $user_products_price + $price;
                $products_id[] = [$b->product_id, $b->count];
            }
            if ($user->coupon) {
                $coupon = $user->coupon;
                $coupon = Coupons::find($coupon->coupon_id);
                $couponAppliedPrice = ($user_products_price) - ($coupon->price);
                $data[] = ['totalPrice' => $user_products_price, 'payablePrice' => $couponAppliedPrice, 'couponPrice' => $coupon->price, 'products_id' => $products_id];
                return $data;
            } else {
                $data[] = ['totalPrice' => $user_products_price, 'payablePrice' => $user_products_price, 'couponPrice' => 0, 'products_id' => $products_id];
                return $data;
            }
        }
        else{
            \Illuminate\Support\Facades\Session::flash('no-basket', "سبد خرید شما خالی است");
            return $data=[];
        }

    }
}
