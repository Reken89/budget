<?php

namespace App\Structure\DeloSection\User\Models;

use App\Structure\UserSection\Auth\Models\User;
use App\Structure\DeloSection\User\Models\Npa;
use App\Structure\DeloSection\User\Models\Correspondent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $table = 'documents';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function npa()
    {
        return $this->belongsTo(Npa::class);
    }
    
    public function correspondent()
    {
        return $this->belongsTo(Correspondent::class);
    }
}

