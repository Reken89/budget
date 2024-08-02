<?php

namespace App\Structure\CSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Structure\UserSection\Auth\Models\User;
use App\Structure\CSection\Admin\Models\Indicator;

class TableOne extends Model
{
    use HasFactory;
    protected $table = 'tc1';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function indicator()
    {
        return $this->belongsTo(Indicator::class);
    }
        
}