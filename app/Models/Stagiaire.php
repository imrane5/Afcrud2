<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Stagiaire extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_stagiaire', 'stagiaire_id', 'role_id');
    }
}

