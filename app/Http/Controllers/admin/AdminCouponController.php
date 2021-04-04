<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Coupons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Symfony\Component\String\s;

class AdminCouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupons::all();
        return view('admin.coupons.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = new Coupons();
        $coupon->title = $request->title;
        $coupon->code = $request->code;
        $coupon->price = $request->price;
        $coupon->status = $request->status;
        $coupon->save();
        Session::flash('coupon-save', "کوپن ذخیره شد");
        return redirect()->back();
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
        $coupon = Coupons::find($id);
        return view('admin.coupons.edit', compact('coupon'));
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
        $coupon = Coupons::find($id);
        $coupon->title = $request->title;
        $coupon->price = $request->price;
        $coupon->code = $request->code;
        $coupon->status = $request->status;
        $coupon->save();
        Session::flash('coupon-update', "کوپن به روز شد");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupons::find($id);
        $coupon->delete();
        Session::flash('coupon-delete', "کوپن حذف شد");
        return redirect()->back();
    }

    public function changeStatus($status, $id)
    {
        $c = Coupons::find($id);
        if ($status == 0) {
            $c->status = '1';
            $c->save();
        } else {
            $c->status = '0';
            $c->save();
        }
        return redirect()->back();
    }
}
