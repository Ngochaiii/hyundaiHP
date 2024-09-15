<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\ConstructionRepository;
use App\Repositories\KeywordRepository;
use App\Repositories\ProductRepository;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class FrontendController extends Controller {

    public function __construct(ProductRepository $productRepo, CategoryRepository $categoryRepo, ConstructionRepository $constructionRepo, KeywordRepository $keywordRepo,NewsRepository $newsRepo) {
        $this->categoryRepo = $categoryRepo;
        $this->constructionRepo = $constructionRepo;
        $this->keywordRepo = $keywordRepo;
        $this->productRepo = $productRepo;
        $this->newsRepo = $newsRepo;

    }

    public function index() {
        $products = $this->productRepo->all();
        $category_arr = $this->categoryRepo->readHomeProductCategory();
        $news = $this->newsRepo->all();
        $keyword_arr = $this->keywordRepo->readHomeRecentKeyword($limit = 6);
        $construction_arr = $this->constructionRepo->all();

        return view('frontend/home/index', compact('category_arr', 'construction_arr', 'keyword_arr'));

    }

}
