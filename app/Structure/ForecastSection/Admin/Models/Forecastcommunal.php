<?php

namespace App\Structure\ForecastSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Structure\UserSection\Auth\Models\User;

class Forecastcommunal extends Model
{
    use HasFactory;
    protected $table = 'forecast_communals';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

