<?php

namespace App\Structure\OfsSection\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Structure\OfsSection\User\Models\Ofs;
use App\Structure\Ofs24Section\Admin\Models\Ofs24;
use App\Structure\CountSection\Admin\Models\Count;
use App\Structure\Count24Section\Admin\Models\Count24;
use App\Structure\Ofs2024Section\User\Models\Ofs241;
use App\Structure\Ofs2024Section\User\Models\Ofs242;
use App\Structure\Ofs2024Section\User\Models\Ofs243;
use App\Structure\Ofs2024Section\User\Models\Ofs244;
use App\Structure\Ofs2024Section\User\Models\Ofs245;
use App\Structure\Ofs25Section\User\Models\Ofs251;
use App\Structure\Ofs25Section\User\Models\Ofs252;
use App\Structure\Ofs25Section\User\Models\Ofs253;
use App\Structure\Ofs25Section\User\Models\Ofs254;
use App\Structure\Ofs25Section\User\Models\Ofs255;
use App\Structure\Count25Section\Admin\Models\Count25;
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
    
    public function ofs241(): HasMany
    {
        return $this->hasMany(Ofs241::class);
    }
    
    public function ofs242(): HasMany
    {
        return $this->hasMany(Ofs242::class);
    }
    
    public function ofs243(): HasMany
    {
        return $this->hasMany(Ofs243::class);
    }
    
    public function ofs244(): HasMany
    {
        return $this->hasMany(Ofs244::class);
    }
    
    public function ofs245(): HasMany
    {
        return $this->hasMany(Ofs245::class);
    }
    
    public function ofs251(): HasMany
    {
        return $this->hasMany(Ofs251::class);
    }
    
    public function ofs252(): HasMany
    {
        return $this->hasMany(Ofs252::class);
    }
    
    public function ofs253(): HasMany
    {
        return $this->hasMany(Ofs253::class);
    }
    
    public function ofs254(): HasMany
    {
        return $this->hasMany(Ofs254::class);
    }
    
    public function ofs255(): HasMany
    {
        return $this->hasMany(Ofs255::class);
    }
    
    public function count25(): HasMany
    {
        return $this->hasMany(Count25::class);
    }
    
}

