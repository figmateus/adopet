<?php

namespace App\Repositories;
use App\Models\User;
class UserRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function create(array $payload):bool
    {
        $payload['password'] = bcrypt($payload['password']);
        $this->model->create($payload);
        return true;
    }
}
