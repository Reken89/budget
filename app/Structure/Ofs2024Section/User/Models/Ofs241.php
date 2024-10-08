<?php

namespace App\Structure\Ofs2024Section\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Structure\OfsSection\User\Models\Ekr;
use App\Structure\UserSection\Auth\Models\User;

class Ofs241 extends Model
{
    use HasFactory;
    protected $table = 'ofs241';
    
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
