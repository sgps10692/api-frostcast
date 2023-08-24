<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'variable_id'];

    public function variable()
    {
        return $this->belongsTo(MeteorologicalVariable::class);
    }

    public function valores()
    {
        return $this->hasMany(MeteorologicalValue::class);
    }
}
