<?php

namespace App\Structure\UtilitiesSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarrif extends Model
{
    use HasFactory;
    protected $table = 'tarrifs';
    
    protected $guarded = [];
    
    public $timestamps = false;
}
