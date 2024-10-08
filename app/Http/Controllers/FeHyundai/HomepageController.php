<?php

namespace App\Http\Controllers\FeHyundai;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\News;
use App\Models\Product;
use App\Models\Slide;
use App\Repositories\CategoryRepository;
use App\Repositories\NewsRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SlideRepository;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function __construct(CategoryRepository $categoryRepo, ProductRepository $productRepo, SlideRepository $slideRepo, NewsRepository $newsRepo) {
        $this->productRepo = $productRepo;
        $this->slideRepo = $slideRepo;
        $this->newsRepo = $newsRepo;
        $this->categoryRepo = $categoryRepo;
    }

    public function index() {
        $slides = Slide::where('status', true)->orderBy('ordering', 'asc')->get();
        $news = News::orderBy('created_at', 'asc')->limit(4)->get();
        $sale_promotions = News::where('is_sale_promo', true)->orderBy('created_at', 'asc')->limit(4)->get();
        $service_promotions = News::where('is_service_promo', true)->orderBy('created_at', 'asc')->limit(4)->get();
        $products = Product::where('status', true)->orderBy('ordering', 'desc')->get();
        $compacts = [
            'slides' => $slides,
            'news' =>$news,
            'sale_promotions' => $sale_promotions,
            'service_promotions' => $service_promotions,
            'products' => $products,
        ];
        return view('fe_hyundai.homepage.index', $compacts);
    }
}
