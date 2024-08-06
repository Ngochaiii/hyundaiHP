<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewPerson extends Model {

    //
    protected $table = "review_person";
    protected $fillable = [
        'facebook_id', 'full_name', 'email', 'avatar'
    ];

}
