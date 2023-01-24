<?php

namespace App\Structure\BuildSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Structure\BuildSection\Admin\Models\Repair;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Work extends Model
{
    use HasFactory;
    protected $table = 'work';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
    public function build(): HasMany
    {
        return $this->hasMany(Repair::class);
    }
}

