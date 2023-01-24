<?php

namespace App\Structure\BuildSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Structure\UserSection\Auth\Models\User;
use App\Structure\BuildSection\Admin\Models\Work;

class Repair extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function work()
    {
        return $this->belongsTo(Work::class);
    }
}

