<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pet';
    protected $fillable = [
        'pet_owner_id',
        'image',
        'status',
        'name',
        'age',
        'gender',
        'personality'
    ];

    public function Owner():BelongsTo
    {
        return $this->belongsTo(PetOwner::class);
    }

}
