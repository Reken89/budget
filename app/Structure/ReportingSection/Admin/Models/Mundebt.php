<?php

namespace App\Structure\ReportingSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mundebt extends Model
{
    use HasFactory;
    protected $table = 'mundebts';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
}
