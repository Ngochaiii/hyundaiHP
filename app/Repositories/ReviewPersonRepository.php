<?php

namespace App\Repositories;

use Repositories\Support\AbstractRepository;

class ReviewPersonRepository extends AbstractRepository {

    public function __construct(\Illuminate\Container\Container $app) {
        parent::__construct($app);
    }

    public function model() {
        return 'App\Models\ReviewPerson';
    }

}
