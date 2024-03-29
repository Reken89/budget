<?php

namespace App\Structure\TaxSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Structure\TaxSection\Admin\Models\TaxKbk;

class Tax extends Model
{
    use HasFactory;
    protected $table = 'taxes';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
    public function tax_kbk()
    {
        return $this->belongsTo(TaxKbk::class, 'kbk', 'kbk');
    }

}
