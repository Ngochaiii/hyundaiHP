<?php

namespace App\Http\Controllers\Fe_Hyundai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestContainController extends Controller
{
    public function index() {
        $compacts = [];
        return view('fe_hyundai.request_consultation.index',$compacts);
    }
}
