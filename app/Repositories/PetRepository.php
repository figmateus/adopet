<?php

namespace App\Repositories;

use App\Models\Interested;
use App\Models\Pet;

class PetRepository
{
    private $model;

    public function __construct(private Interested $interested)
    {
        $this->model = new Pet();
    }

    public function adoptPet(int $petId, int $userId):bool
    {

        $this->interested->create([
            'user_id' => $userId,
            'pet_id' => $petId,
        ]);

        return true;
    }

}
