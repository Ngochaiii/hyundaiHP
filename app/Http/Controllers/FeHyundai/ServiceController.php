<?php

namespace App\Http\Controllers\FeHyundai;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function hyundaime() {
        $products = Product::paginate(12);
        $all_cars = Product::all();

        $compacts = [
            'products'=>$products,
            'all_cars' => $all_cars,

        ];
        return view('fe_hyundai.service.hyundai_me_app');
    }
    public function service_programming() {
        $products = Product::paginate(12);
        $all_cars = Product::all();

        $compacts = [
            'products'=>$products,
            'all_cars' => $all_cars,

        ];
        return view('fe_hyundai.service.service_programming');
    }
    public function genuine() {
        $products = Product::paginate(12);
        $all_cars = Product::all();

        $compacts = [
            'products'=>$products,
            'all_cars' => $all_cars,

        ];
        return view('fe_hyundai.service.genuine');
    }
    public function rescue_service() {
        $products = Product::paginate(12);
        $all_cars = Product::all();

        $compacts = [
            'products'=>$products,
            'all_cars' => $all_cars,

        ];
        return view('fe_hyundai.service.rescue_service');
    }
    public function schedule_repair() {
        $products = Product::paginate(12);
        $all_cars = Product::all();

        $compacts = [
            'products'=>$products,
            'all_cars' => $all_cars,

        ];
        return view('fe_hyundai.service.schedule_repair');
    }

}
