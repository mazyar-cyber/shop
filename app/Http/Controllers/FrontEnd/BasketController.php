<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
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
        return 'destroy method';
    }

    public function add($id)
    {
        $basket = Basket::where('product_id', $id)->where('user_id', Auth::id())->get();
        if (count($basket) > 0) {
            foreach ($basket as $b) {
                echo $b->count . '...';
                $model = Basket::find($b->id);
                $model->count++;
                $model->save();
            }
            \Illuminate\Support\Facades\Session::flash('basket-add', "محصول با موفقیت به سبد خرید شما اضافه شد");
            return redirect()->back();

        } else {
            $basket = new Basket();
            $basket->product_id = $id;
            $basket->user_id = Auth::id();
            $basket->count = 1;
            $basket->save();
            \Illuminate\Support\Facades\Session::flash('basket-add', "محصول با موفقیت به سبد خرید شما اضافه شد");
            return redirect()->back();
        }
    }

    public function deleteBasket($id)
    {
        $basket = Basket::find($id);
        $basket->delete();
        return redirect()->back();
    }

}
