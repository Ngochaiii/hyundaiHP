<?php

namespace App\Http\Controllers\Fe_Hyundai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogCobntroller extends Controller
{
    public function index() {
        $compacts = [];
        return view('fe_hyundai.News_pp.index',$compacts);
    }
}
