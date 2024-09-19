<?php

namespace App\Http\Controllers\FeHyundai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $compacts = [];
        return view('fe_hyundai.News_pp.index',$compacts);
    }
}
