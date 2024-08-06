<?php

namespace App\Repositories;


use Repositories\Support\AbstractRepository;

class OrderRepository extends AbstractRepository
{
    public function __construct(\Illuminate\Container\Container $app) {
        parent::__construct($app);
    }

    public function model() {
        return 'App\Models\Order';
    }
    public function validateCreate() {
        return $rules = [
            'contact' => 'required',
            'email' => 'required',
            'payment_method' => 'required',
            'transport_method' => 'required',
            'mobile' => 'required'
        ];
    }

}
