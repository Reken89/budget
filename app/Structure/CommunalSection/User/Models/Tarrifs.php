<?php

namespace App\Structure\CommunalSection\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarrifs extends Model
{
    use HasFactory;
    protected $table = 'tarrifs';
    
    protected $guarded = [];
    
    public $timestamps = false;
}



