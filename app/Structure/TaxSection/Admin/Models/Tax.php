<?php

namespace App\Structure\TaxSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;
    protected $table = 'taxes';
    
    protected $guarded = [];
    
    public $timestamps = false;

}
