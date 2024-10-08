<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\ConstructionRepository;
use App\Repositories\KeywordRepository;
use App\Repositories\NewsRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SlideRepository;
use Illuminate\Http\Request;

class FrontendController extends Controller {

    public function __construct(SlideRepository $slideRepo, ProductRepository $productRepo, CategoryRepository $categoryRepo, ConstructionRepository $constructionRepo, KeywordRepository $keywordRepo) {
        $this->categoryRepo = $categoryRepo;
        $this->constructionRepo = $constructionRepo;
        $this->keywordRepo = $keywordRepo;
        $this->productRepo = $productRepo;
        $this->slideRepo = $slideRepo;
    }

    public function index() {
        $slide = $this->
        $products = $this->productRepo->all();
        $category_arr = $this->categoryRepo->readHomeProductCategory();
        $news = $this->newsRepo->all();
        $keyword_arr = $this->keywordRepo->readHomeRecentKeyword($limit = 6);


        return view('frontend/home/index', compact('category_arr', 'news', 'keyword_arr'));

    }

}
