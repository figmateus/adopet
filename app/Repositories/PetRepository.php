<?php

namespace App\Repositories;

use App\Models\Pet;
class PetRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Pet();
    }


}
