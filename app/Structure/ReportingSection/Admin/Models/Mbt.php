<?php

namespace App\Structure\ReportingSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mbt extends Model{
    use HasFactory;
    protected $table = 'mbt';
    protected $guarded = [];   
    public $timestamps = false;    
}
