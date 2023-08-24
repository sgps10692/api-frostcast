<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeteorologicalVariable extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function parametros()
    {
        return $this->hasMany(Parameter::class);
    }
}
