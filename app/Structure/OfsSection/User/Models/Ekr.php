<?php

namespace App\Structure\OfsSection\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Structure\OfsSection\User\Models\Ofs;
use App\Structure\CountSection\Admin\Models\Count;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ekr extends Model
{
    use HasFactory;
    protected $table = 'ekr';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
    public function ofs(): HasMany
    {
        return $this->hasMany(Ofs::class);
    }
    
    public function count(): HasMany
    {
        return $this->hasMany(Count::class);
    }
    
}

