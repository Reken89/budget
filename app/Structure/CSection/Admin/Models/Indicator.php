<?php

namespace App\Structure\CSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Indicator extends Model
{
    use HasFactory;
    protected $table = 'indicators';
    
    protected $guarded = [];
    
    public $timestamps = false;
        
}

