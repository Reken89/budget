<?php

namespace App\Structure\CommunalSection\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;
    protected $table = 'points';
    
    protected $guarded = [];
    
    public $timestamps = false;
}


