<?php

namespace App\Structure\UtilitiesSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Limit extends Model
{
    use HasFactory;
    protected $table = 'limits';
    
    protected $guarded = [];
    
    public $timestamps = false;
}

