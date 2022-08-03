<?php

namespace App\Repositories;

use App\Models\{PetOwner, User, Pet};
use Illuminate\Support\Facades\Auth;
class PetOwnerRepository
{
    protected $model;
    protected $user;
    protected $pet;

    public function __construct(){
        $this->model = new PetOwner();
        $this->user = new User();
        $this->pet = new Pet();
    }

    public function create(array $payload):bool
    {
       $user = $this->user->where('email', $payload['email'])->first();
        if(!$user){
            $payload['password'] = bcrypt($payload['password']);
            $petOwner = $this->model->create($payload);
            Auth::guard('owners')->login($petOwner);
            return true;
        }

        return false;
    }

    public function createPet(array $payload):bool
    {
        if (isset($payload['image']) && $payload['image']->isValid()) {
            $path = $payload['image']->store('images', 'public');
            $payload['image'] = $path;
        }else
        {
            $payload['image'] = null;
        }

            $pet = $this->pet->create([
                'pet_owner_id' => Auth::guard('owners')->id(),
                'name' => $payload['name'],
                'status' => 'adoção',
                'age' => $payload['age'],
                'gender' => $payload['gender'],
                'personality' => $payload['personality'],
               'image' => $payload['image'],
           ]);
            if(!$pet){
                return false;
            }
            return true;

    }

    public function editPet(int $id,$payload):bool
    {
            $pet = Pet::find($id);
            if(!$pet->update($payload)){
                return false;
            }
            return true;
    }

    public function petDelete($id):bool
    {
            $pet = Pet::find($id);
            if(!$pet->delete()){
                return false;
            };
            return true;
    }
}
