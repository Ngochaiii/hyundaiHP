<?php

namespace App\Http\Controllers\FeHyundai;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class RequestContainController extends Controller
{
    public function index() {
        $products = Product::where('status', true)->orderBy('ordering', 'desc')->get();
        $compacts = [
            'products'=>$products,
        ];
        return view('fe_hyundai.request_consultation.index',$compacts);
    }

}
