<?php

namespace App\Repositories;

use Repositories\Support\AbstractRepository;

class ConfigRepository extends AbstractRepository {

    public function __construct(\Illuminate\Container\Container $app) {
        parent::__construct($app);
    }

    public function model() {
        return 'App\Models\Config';
    }

    public function validateUpdate($id) {
        return $rules = [
            'image' => 'required',
            'favicon' => 'required',
            'title' => 'required',
            'company_name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'hotline' => 'required',
            'phone' => 'required',
        ];
    }

}
