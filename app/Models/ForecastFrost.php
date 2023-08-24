<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForecastFrost extends Model
{

    protected $table = "forecast_frosts";

    use HasFactory;

    protected $fillable = [
        'location_id',
        'probability'
    ];
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
}
