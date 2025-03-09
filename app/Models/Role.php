<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function stagiaires()
    {
        return $this->belongsToMany(Stagiaire::class, 'role_stagiaire', 'role_id', 'stagiaire_id');
    }
}

