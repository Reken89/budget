<?php

namespace App\Structure\ReportingSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporting extends Model
{
    use HasFactory;
    protected $table = 'reporting';
    
    protected $guarded = [];
    
    public $timestamps = false;
    

}

