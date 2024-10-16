<?php

namespace App\Structure\BlockSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;
    protected $table = 'versions';
    
    protected $guarded = [];
    
    public $timestamps = false;
}
