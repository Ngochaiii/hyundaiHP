<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'order';
    protected $fillable = ['ref', 'status', 'contact', 'email', 'payment_method', 'mobile', 'note', 'transport_method', 'total', 'address'];

    public function created_at() {
        return date("d/m/Y", strtotime($this->created_at));
    }

    public function products() {
        return $this->belongsToMany('App\Models\Product', 'order_detail', 'order_id', 'product_id')->withPivot('order_id', 'product_id', 'quantity', 'sub_total');
    }

    public function detail() {
        return $this->hasMany('App\Models\OrderDetail');
    }

    public function member() {
        return $this->belongsTo('App\Models\Member');
    }
    public function total_format(){
        return number_format($this->total);
    }
}
