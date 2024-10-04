<?php

namespace App\Http\Controllers\FeHyundai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $compacts = [];
        return view('fe_hyundai.news.index',$compacts);
    }
    public function list() {
        $compacts = [];
        return view('fe_hyundai.news.list_pomo',$compacts);
    }
    public function listpomo() {
        $compacts = [];
        return view('fe_hyundai.news.list',$compacts);
    }
    public function detail() {
        $compacts = [];
        return view('fe_hyundai.news.detail',$compacts);
    }

}
