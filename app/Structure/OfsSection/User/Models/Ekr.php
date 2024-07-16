<?php

namespace App\Structure\OfsSection\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Structure\OfsSection\User\Models\Ofs;
use App\Structure\Ofs24Section\Admin\Models\Ofs24;
use App\Structure\CountSection\Admin\Models\Count;
use App\Structure\Count24Section\Admin\Models\Count24;
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
    
    public function ofs24(): HasMany
    {
        return $this->hasMany(Ofs24::class);
    }
    
    public function count(): HasMany
    {
        return $this->hasMany(Count::class);
    }
    
    public function count24(): HasMany
    {
        return $this->hasMany(Count24::class);
    }
    
}

