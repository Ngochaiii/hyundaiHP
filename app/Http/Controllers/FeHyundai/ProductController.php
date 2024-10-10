<?php

namespace App\Http\Controllers\FeHyundai;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail(string $alias) {

        $products_detail = Product::where('alias', $alias)->first();
        $products = Product::where('status', true)->orderBy('ordering', 'desc')->get();
        $compacts = [
            'product' => $products_detail,
            'products' => $products
        ];

        return view('fe_hyundai.product.detail',$compacts);
    }
}
