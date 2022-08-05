<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Interested extends Model
{
    use HasFactory;
    protected $table = 'interested';

    protected $fillable = [
        'user_id',
        'pet_id'
    ];

    public function user():HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function pet():HasMany
    {
        return $this->hasMany(Pet::class, 'id', 'pet_id');
    }


}
