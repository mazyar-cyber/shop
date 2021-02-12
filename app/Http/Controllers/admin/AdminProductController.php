<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\ProCat;
use App\Models\Product;
use App\Models\Product_prop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function GuzzleHttp\Promise\all;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.Product.index', compact('products'));
    }

    public function indexApi()
    {
        $products = Product::with(['brand', 'category'])->get();
        return response()->json($products, '200');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brands::all();
        $cats = ProCat::all();
        return view('admin.Product.create', compact(['brands', 'cats']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]
     */
    public function store(Request $request)
    {
        $product = new Product();
        $file = $request->file('pic');
        $filename = time() . $file->getClientOriginalName();
        Storage::disk('local')->putFileAs('public/photos/product', $file, $filename);
        $product->title = $request->title;
        $product->photo_path = $filename;
        $product->sku = $request->sku;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->brand_id = $request->brand;
        $product->cat_id = $request->cat;
        $product->description = $request->description;
        $product->discount_price = $request->discount_price;
        $product->save();
        \Illuminate\Support\Facades\Session::flash('product-save', 'محصول با موفقیت ایجاد شد');
        $cat = \App\Models\ProCat::find($request->cat);
        $props = $cat->property;
        for ($i = 0; $i < count($props); $i++) {
            $productProp = new Product_prop();
            $productProp->title = $request->property[$i];
            $productProp->property_id = $props[$i]->id;
            $productProp->product_id = $product->id;
            $productProp->save();
        }
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
        $product = Product::find($id);
        $cat = ProCat::find($product->cat_id);
        $brand = Brands::find($product->brand_id);
        foreach ($cat->property as $prop) {
            $productPropsValue = Product_prop::all()->where('product_id', $product->id)->where('property_id', $prop->id)->first();
            $productProps = $prop->title;
            $allData[] = [$productPropsValue, 'propTitle' => $productProps];
        }
//        return $allData;
        return view('admin.Product.show', compact(['product', 'cat', 'brand', 'allData']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brands::all();
        $cats = ProCat::all();
        $product = Product::find($id);
//        return $product->propertyValue;
        return view('admin.Product.edit', compact(['cats', 'brands', 'product']));
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
        $product = Product::find($id);
        if ($request->file('pic')) {
           @unlink("storage/photos/product/$product->photo_path");
            $file = $request->file('pic');
            $filename = time() . $file->getClientOriginalName();
            Storage::disk('local')->putFileAs('public/photos/product', $file, $filename);
            $product->photo_path = $filename;
        }
        $product->title = $request->title;
        $product->sku = $request->sku;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->brand_id = $request->brand;
        if ($product->cat_id != $request->cat) {
            $cat = \App\Models\ProCat::find($product->cat_id);
            $props = $cat->property;
            for ($i = 0; $i < count($props); $i++) {
                $productProp = Product_prop::all()->where('product_id', $product->id)
                    ->where('property_id', $props[$i]->id)->first();
                $productProp->delete();
            }
        }
        $product->cat_id = $request->cat;
        $product->description = $request->description;
        $product->discount_price = $request->discount_price;
        $product->save();
        \Illuminate\Support\Facades\Session::flash('product-save', 'محصول با موفقیت ویرایش شد');
        $cat = \App\Models\ProCat::find($request->cat);
        $props = $cat->property;
        for ($i = 0; $i < count($props); $i++) {
            $productProp = Product_prop::all()->where('product_id', $product->id)->where('property_id', $props[$i]->id)->first();
            if (!$productProp) {
                $productProp = new Product_prop();
            }
            if ($request->property[$i]) {
                $productProp->title = $request->property[$i];
                $productProp->property_id = $props[$i]->id;
                $productProp->product_id = $product->id;
                $productProp->save();
            }
        }

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
        $product = Product::find($id);
        @unlink("/storage/photos/product/$product->photo_path");
        $product->delete();
        return redirect()->back();
    }

    public function delete($id)
    {
        $product = Product::find($id);
        @unlink("/storage/photos/product/$product->photo_path");
        $product->delete();
    }

    public function deleteSelectedProduct(Request $request)
    {
        if (count($request->get('allId')) == 0) {
            echo 0;
        } else {
            foreach ($request->get('allId') as $id) {
                $product = Product::find($id);
                @unlink("/storage/photos/product/$product->photo_path");
                $product->delete();
            }
        }
    }

    public function selectedDelete(Request $request)
    {
        foreach ($request->checkBoxArray as $proId) {
            $pro = Product::find($proId);
            @unlink("/storage/photos/product/$pro->photo_path");
            $pro->delete();
        }
        \Illuminate\Support\Facades\Session::flash('product-delete', "مواردی که شما انتخاب کرده بودید حذف شدند");
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $title = $request->get('searchTitle');
        $product = Product::where('title', 'LIKE', "%$title%")->orWhere('description', 'LIKE', "%$title%")->with(['brand', 'category'])->get();
        return $product;
    }

}
