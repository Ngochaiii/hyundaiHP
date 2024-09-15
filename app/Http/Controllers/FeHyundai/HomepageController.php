<?php

namespace App\Http\Controllers\FeHyundai;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
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
