<?php

namespace App\Http\Controllers\Fe_Hyundai;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail(string $alias) {
        $detail_product = Product::where('alias', $alias)->first();
        $images = explode(',', $detail_product->images);
        $all_cars = Product::all();
        $products = Product::paginate(12);
        $compacts = [
            'products' => $products,
            'detail_product' => $detail_product,
            'images' => $images,
            'all_cars' => $all_cars,

        ];
        // dd($compacts);
        return view('fe_hyundai.product.detail',$compacts);
    }
}
