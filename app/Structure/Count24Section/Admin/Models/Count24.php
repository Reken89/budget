<?php

namespace App\Structure\Count24Section\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Structure\OfsSection\User\Models\Ekr;
use App\Structure\UserSection\Auth\Models\User;

class Count24 extends Model
{
    use HasFactory;
    protected $table = 'counts24';
    
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

