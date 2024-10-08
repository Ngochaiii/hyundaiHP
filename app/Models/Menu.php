<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

    //
    protected $table = "menu";
    protected $fillable = [
        'title', 'link', 'ordering', 'status', 'parent_id','image'
    ];

    public function created_at() {
        return date("d/m/Y", strtotime($this->created_at));
    }

    public function updated_at() {
        return date("d/m/Y", strtotime($this->updated_at));
    }

}
