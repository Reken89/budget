<?php

namespace App\Structure\OfsSection\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ofs extends Model
{
    use HasFactory;
    protected $table = 'ofs';
    
    protected $guarded = [];
    
    public $timestamps = false;
}

