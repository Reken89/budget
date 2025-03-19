<?php

namespace App\Structure\Forecast25Section\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Structure\UserSection\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Forecast extends Model
{
    use HasFactory;
    protected $table = 'forecasts';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
