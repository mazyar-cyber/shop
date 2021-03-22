<?php

namespace App\Listeners;

use App\Events\ProductView;
use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IncreaseProductView
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
     * @param ProductView $event
     * @return void
     */
    public function handle(ProductView $event)
    {
        $proId = $event->getProductID();
        $product = Product::find($proId);
        $product->views = $product->views + 1;
        $product->save();
    }
}
