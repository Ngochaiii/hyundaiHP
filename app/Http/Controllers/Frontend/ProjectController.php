<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProjectRepository;
use App\Repositories\ConstructionRepository;
use App\Repositories\CategoryRepository;

class ProjectController extends Controller {

    //
    public function __construct(CategoryRepository $categoryRepo,ProjectRepository $projectRepo, ConstructionRepository $constructionRepo) {
        $this->projectRepo = $projectRepo;
        $this->constructionRepo = $constructionRepo;
        $this->categoryRepo = $categoryRepo;
    }

    public function detail($alias) {
        $project = $this->projectRepo->findByAlias($alias);
        $record = $this->constructionRepo->find($project->construction_id);
        $category_arr = $this->categoryRepo->readCategoryByType(\App\Models\Category::TYPE_CONSTRUCTION);
        if (config('global.device') != 'pc') {
            return view('mobile/project/detail', compact('record', 'project','category_arr'));
        }
        else{
            return view('frontend/project/detail', compact('record', 'project'));
        }
    }

}
