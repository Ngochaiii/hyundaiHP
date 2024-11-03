<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoogleTracking extends Model
{
    protected $table = 'google_tracking';

    protected $fillable = [
        'tracking_code',
        'is_active',
        'campaign_name',
        'conversion_id',
        'conversion_label'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
