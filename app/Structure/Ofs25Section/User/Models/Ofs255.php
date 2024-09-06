<?php

namespace App\Structure\Ofs25Section\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Structure\OfsSection\User\Models\Ekr;
use App\Structure\UserSection\Auth\Models\User;

class Ofs255 extends Model
{
    use HasFactory;
    protected $table = 'ofs255';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function ekr()
    {
        return $this->belongsTo(Ekr::class);
    }
}
