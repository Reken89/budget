<?php

namespace App\Structure\ForecastSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forecasttarrif extends Model
{
    use HasFactory;
    protected $table = 'forecast_tarrifs';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
}