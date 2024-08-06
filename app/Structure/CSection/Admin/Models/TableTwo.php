<?php

namespace App\Structure\CSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Structure\UserSection\Auth\Models\User;
use App\Structure\CSection\Admin\Models\Indicator;

class TableTwo extends Model
{
    use HasFactory;
    protected $table = 'tc2';
    
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

