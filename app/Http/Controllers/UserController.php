<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use App\Repositories\UserRepository;
class UserController extends Controller
{
    public $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function register():View
    {
        $states = config('states');
        return view('user.register', compact('states'));
    }

    public function store(UserRegisterRequest $request):RedirectResponse
    {
        $user = $request->all();
        $this->repository->create($user);
        return redirect()->route('pet.index');
    }
}
