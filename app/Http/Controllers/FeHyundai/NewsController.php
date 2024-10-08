<?php

namespace App\Http\Controllers\FeHyundai;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repositories\CategoryRepository;
use App\Repositories\NewsCategoryRepository;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller {

    //
    public function __construct(NewsRepository $newsRepo, CategoryRepository $categoryRepo, NewsCategoryRepository $newsCategoryRepo) {
        $this->newsRepo = $newsRepo;
        $this->categoryRepo = $categoryRepo;
        $this->newsCategoryRepo = $newsCategoryRepo;
    }

    public function list(Request $request, $alias = '') {
        $category_name = '';
        if ($alias) {
            $category = $this->categoryRepo->findByAlias($alias);
            $category_name = $category->title;
            $records = $this->newsRepo->readFE($request, $category->id);
        } else {
            $records = $this->newsRepo->readFE($request);
        }
        $products = Product::where('status', true)->orderBy('ordering', 'desc')->get();
        $category_arr = $this->categoryRepo->readHomeNewsCategory();
        $featured_news = $this->newsRepo->readFeaturedNews($limit = 5);
        return view('fe_hyundai/news/list', compact('records', 'category_arr', 'featured_news', 'category_name', 'products'));
    }

    public function detail($alias) {
        $record = $this->newsRepo->findByAlias($alias);
        if(!$record){
            return redirect()->route('home.index');
        }
        $this->newsRepo->updateViewCount($record->id, $record->view_count);
        $products = Product::where('status', true)->orderBy('ordering', 'desc')->get();
        $featured_news = $this->newsRepo->readFeaturedNews($limit = 5);
        $category_arr = $this->categoryRepo->readHomeNewsCategory();
        $news_ids = $this->newsCategoryRepo->getNewsIds($record->categories->pluck('id'));
        $related_news = $this->newsRepo->readRelatedNews($record->id, $news_ids);
        // $config = $this->newsRepo->getConfig($record->id);
        $blog = $record;
        //$url = \Illuminate\Support\Facades\Request::url();
        return view('fe_hyundai/news/detail', compact('record', 'blog', 'products', 'related_news','featured_news'));
    }

}
