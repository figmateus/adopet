<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'age',
        'personality'
    ];

    public function Owner():BelongsTo
    {
        return $this->belongsTo(PetOwner::class);
    }

}
