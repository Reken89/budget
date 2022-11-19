<?php

namespace App\Structure\CommunalSection\User\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Structure\UserSection\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Communal extends Model
{
    use HasFactory;
    protected $table = 'communals';
    
    protected $fillable = [ 
        'status',
        'heat-volume',
        'heat-sum',
        'drainage-volume',
        'drainage-sum',
        'negative-volume',
        'negative-sum',
        'water-volume',
        'water-sum',
        'power-volume',
        'power-sum',
        'trash-volume',
        'trash-sum',
        'disposal-volume',
        'disposal-sum',       
    ];
    
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}


