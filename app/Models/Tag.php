<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    //
    protected $table = "tag";
    protected $fillable = [
        'title', 'gallery_id', 'image', 'position_x', 'position_y'
    ];
    public $timestamps = false;
}
