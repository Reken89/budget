<?php

namespace App\Structure\Forecast25Section\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarrif extends Model
{
    use HasFactory;
    protected $table = 'tarrifs25';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
}

