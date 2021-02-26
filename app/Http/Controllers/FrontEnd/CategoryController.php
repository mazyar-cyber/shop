<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\ProCat;
use App\Models\Product;
use App\Models\Product_prop;
use App\Models\PropertyValue;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $products = Product::where('cat_id', $id)->with('category')->get();
        $category = ProCat::findorFail($id);
        return view('FrontEnd.Category.show', compact(['products', 'category']));
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

    public function getProduct($id)
    {
        $products = Product::where('cat_id', $id)->with('category')->paginate(2);
        return $products;
    }

    public function getSortedProduct($id, $sort, $page)
    {
        $expD = explode(',', $sort);
        $col = $expD[0];
        $sort = $expD[1];
        $products = Product::where('cat_id', $id)->with('category')->orderBy($col, $sort)->paginate($page);
        return $products;
    }

    public function getProps($id)
    {
        $cat = ProCat::find($id);
        $props = $cat->property;
        return $props;
    }

    public function searchProp(Request $request, $id,$page)
    {
        $cat = ProCat::find($id);
        foreach ($request->all() as $key => $value) {
            $keys[] = $key;
            $values[] = $value;
        }
        foreach ($cat->product as $product) {
            $products_id[] = $product->id;
        }
        $answer = Product_prop::whereIn('title', $values)->whereIn('product_id', $products_id)->whereIn('property_id', $keys)->get();
        $products = Product::whereHas('category', function ($q) use ($id) {
            $q->where('id', $id);
        })->whereHas('propertyValue', function ($q) use ($keys, $values) {
            $q->whereIn('title',$values);
        })->paginate($page);
        return $products;
//        foreach ($cat->product as $product) {
//            foreach ($request->all() as $key=>$value) {
//                $array= Product_prop::where('product_id', $product->id)->where('title', $value)->where('property_id',$key)->with('product')->with('property')->first();
//                if ($array){
//                    $products[]=$array->product;
//                    $answers[]=$array;
//                }
//            }
//        }
//        $data=[$answers,$products];
//        return $answers;
    }
}
