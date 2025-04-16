<?php

namespace App\Structure\Count25Section\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Structure\OfsSection\User\Models\Ekr;
use App\Structure\UserSection\Auth\Models\User;

class Count25 extends Model
{
    use HasFactory;
    protected $table = 'counts25';
    
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
