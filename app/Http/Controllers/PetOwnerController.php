<?php

namespace App\Http\Controllers;

use App\Repositories\PetOwnerRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PetOwnerController extends Controller
{
    public $repository;

    public function __construct(PetOwnerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function register():View
    {
        $states = config('states');
        return view('owner.register',compact('states'));
    }
}
