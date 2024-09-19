<?php

namespace App\Http\Controllers\FeHyundai;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class RequestContainController extends Controller
{
    public function index() {
        $products = Product::paginate(12);
        $all_cars = Product::all();

        $compacts = [
            'products'=>$products,
            'all_cars' => $all_cars,

        ];
        return view('fe_hyundai.request_consultation.index',$compacts);
    }

}
