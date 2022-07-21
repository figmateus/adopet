<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PetOwner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
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
