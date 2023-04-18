<?php

namespace App\Structure\TaxSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Structure\TaxSection\Admin\Models\Tax;

class TaxKbk extends Model
{
    use HasFactory;
    protected $table = 'tax_kbk';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
    public function Tax(): HasMany
    {
        return $this->hasMany(Tax::class, 'kbk', 'kbk');
    }

}


