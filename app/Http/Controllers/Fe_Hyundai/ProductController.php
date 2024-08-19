<?php

namespace App\Http\Controllers\Fe_Hyundai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail() {
        $compacts = [];
        return view('fe_hyundai.product.detail',$compacts);
    }
}
