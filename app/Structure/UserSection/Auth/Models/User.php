<?php

namespace App\Structure\UserSection\Auth\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Structure\CommunalSection\User\Models\Communal;
use App\Structure\OfsSection\User\Models\Ofs;
use App\Structure\BuildSection\Admin\Models\Repair;
use App\Structure\ForecastSection\Admin\Models\Forecastcommunal;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    /**
     * Определяем роль пользователя
     */
    public function role()
    {
        return $this->role;
    }
    
    /**
     * Определяем имя пользователя
     */
    public function name()
    {
        return $this->name;
    }
    
    public function communal(): HasMany
    {
        return $this->hasMany(Communal::class);
    }
    
    public function ofs(): HasMany
    {
        return $this->hasMany(Ofs::class);
    }
    
    public function build(): HasMany
    {
        return $this->hasMany(Repair::class);
    }
    
    public function forecast(): HasMany
    {
        return $this->hasMany(Forecastcommunal::class);
    }
}


