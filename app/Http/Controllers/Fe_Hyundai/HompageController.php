<?php

namespace App\Http\Controllers\Fe_Hyundai;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Product;
use Illuminate\Http\Request;

class HompageController extends Controller
{
    public function index() {
        $products = Product::paginate(12);
        $blogs  = Block::all();
        $compacts = [
            'products' => $products,
            'blogs' =>$blogs
        ];
        // dd($compacts);
        return view('fe_hyundai.homepage.index',$compacts);
    }
}
