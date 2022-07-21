<?php

namespace App\Repositories;
use App\Models\PetOwner;
class PetOwnerRepository
{
    protected $model;
    public function __construct(){
        $this->model = new PetOwner();
    }
}
