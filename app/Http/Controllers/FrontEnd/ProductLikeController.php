<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Product_Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductLikeController extends Controller
{
    public function getProductLike($id)
    {
        $likes = Product_Like::where('product_id', $id)->where('like', 1)->get();
        $dis_likes = Product_Like::where('product_id', $id)->where('like', '0')->get();
//        return count($dis_likes);
        $data = [count($likes), count($dis_likes)];
        return $data;
    }

    public function like($id, $param)
    {
        $data = Product_Like::where('product_id', $id)->where('user_id', Auth::id())->first();
        if ($data) {
            $data->like = $param;
            $data->save();
        } else {
            $data = new Product_Like();
            $data->user_id = Auth::id();
            $data->product_id = $id;
            $data->like = $param;
            $data->save();
        }
    }
}
