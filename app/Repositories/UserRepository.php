<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Implementations\QueryBuilderImplementation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserRepository extends QueryBuilderImplementation
{
    use HasApiTokens, HasFactory, Notifiable;

    public $fillable = ['name', 'email', 'email_verified_at', 'password'];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function __construct()
    {
        $this->table = 'users';
        $this->pk = 'id';
    }
}
