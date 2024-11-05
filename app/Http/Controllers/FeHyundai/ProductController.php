<?php

namespace App\Http\Controllers\FeHyundai;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail(string $alias) {

        $products_detail = Product::where('alias', $alias)->first();
        if($products_detail){
            $products = Product::where('status', true)->orderBy('ordering', 'desc')->get();

            $breadcrumbs = [
                ['title' => 'Sản Phẩm', 'url' => route('home.index')],
                ['title' => $products_detail->title, 'url' => '']
            ];

            $compacts = [
                'product' => $products_detail,
                'products' => $products,
                'breadcrumbs' => $breadcrumbs,
            ];

            return view('fe_hyundai.product.detail',$compacts, );
        }
        return view('fe_hyundai.404');

    }
}
