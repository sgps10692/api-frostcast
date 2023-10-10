<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = "locations";

    use HasFactory;


    protected $fillable = [
        "name",
        "city",
        "location",
        "latitude",
        "length",
        "altitude"
    ];

    public function forecast_frosts()
    {
        return $this->hasMany(ForecastFrost::class);
    }

    public function valores()
    {
        return $this->hasMany(MeteorologicalValue::class);
    }


}
