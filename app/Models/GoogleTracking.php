<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoogleTracking extends Model
{
    protected $table = 'google_tracking';

    protected $fillable = [
        'tracking_code',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public static function getActiveTrackingCodes()
    {
        return self::where('is_active', true)
                   ->pluck('tracking_code')
                   ->filter()
                   ->toArray();
    }
}
