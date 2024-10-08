<?php

namespace App\Repositories;

use Repositories\Support\AbstractRepository;

class ProductCategoryRepository extends AbstractRepository
{
    public function __construct(\Illuminate\Container\Container $app) {
        parent::__construct($app);
    }

    public function model() {
        return 'App\Models\ProductCategory';
    }
    public function getCategory($category_arr)
    {
        return $this->model->whereIn('category_id', $category_arr->pluck('id'))->orderBy('category_id', 'desc')->first();
    }
}
