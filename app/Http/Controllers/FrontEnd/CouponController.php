<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Coupon_User;
use App\Models\Coupons;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    public function check(Request $request)
    {
        $coupons = Coupons::where('code', $request->coupon)->get();
        if (count($coupons) > 0) {
            $cop_user = Coupon_User::where('user_id', Auth::id())->where('coupon_id', $coupons[0]->id)->get();
            if (count($cop_user) > 0) {
                \Illuminate\Support\Facades\Session::flash('coupon-expired', "شما از این کوپن استفاده کرده اید");
                return redirect()->back();
            }
            $cop_user = new Coupon_User();
            $cop_user->user_id = Auth::id();
            $cop_user->coupon_id = $coupons[0]->id;
            $cop_user->save();
            \Illuminate\Support\Facades\Session::flash('coupon-apply', "کوپن اعمال شد");
            return redirect()->back();

        } else {
            \Illuminate\Support\Facades\Session::flash('coupon-null', "کد کوپن اشتباه است");
            return redirect()->back();
        }

    }

    public function calcPrice()
    {
        $user = Auth::user();
        $user_products_price = 0;
        $userBasket = Basket::where('user_id', Auth::id())->get();
        //calculating total products price  of user's order
        foreach ($userBasket as $b) {
            $price = (($b->product->price) - ($b->product->discount_price)) * $b->count;
            $user_products_price = $user_products_price + $price;
        }
        if ($user->coupon) {
            $coupon = $user->coupon;
            $coupon = Coupons::find($coupon->coupon_id);
            $couponAppliedPrice = ($user_products_price) - ($coupon->price);
            $data[] = ['totalPrice' => $user_products_price, 'payablePrice' => $couponAppliedPrice, 'couponPrice' => $coupon->price];
            return $data;
        } else {
            $data[] = ['totalPrice' => $user_products_price, 'payablePrice' => $user_products_price, 'couponPrice' => 0];
            return $data;
        }
    }

}
