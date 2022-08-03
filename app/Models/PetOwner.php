<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PetOwner extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'email',
        'password',
        'phone',
        'cpf-cnpj',
        'street',
        'cep',
        'neighbor',
        'number',
        'city',
        'state',
    ];

    public function pets():HasMany
    {
         return $this->hasMany(Pet::class);
    }
}
