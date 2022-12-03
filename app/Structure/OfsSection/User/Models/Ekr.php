<?php

namespace App\Structure\OfsSection\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekr extends Model
{
    use HasFactory;
    protected $table = 'ekr';
    
    protected $guarded = [];
    
    public $timestamps = false;
}

