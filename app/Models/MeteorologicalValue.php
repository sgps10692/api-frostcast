<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeteorologicalValue extends Model
{
    use HasFactory;

    protected $fillable = ['location_id', 'parameter_variable_id', 'value'];

    public function parameter()
    {
        return $this->belongsTo(Parameter::class, 'parameter_variable_id');
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
