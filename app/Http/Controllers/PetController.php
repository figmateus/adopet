<?php

namespace App\Http\Controllers;

use App\Models\Interested;
use App\Models\Pet;
use App\Repositories\PetRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PetController extends Controller
{
    public $repository;
    public function __construct(Public Pet $pet, Public Interested $interested, PetRepository $petRepository)
    {
        $this->repository = $petRepository;
    }

    public function index():View
    {
        $pets = $this->pet::paginate(10);
        return view('pet.index', compact('pets'));
    }

    public function register():View
    {
        return view('pet.register');
    }

    public function show(int $id):View
    {
        $pet = $this->pet::where('id',$id)->with('Owner')->first();
        return view('pet.show', compact('pet'));
    }

    public function adopt(int $petId, int $userId):RedirectResponse
    {
        $response = $this->repository->adoptPet($petId, $userId);
        $pets = $this->pet::paginate(10);
        if(!$response){

            return redirect()->route('pet.index',compact('pets'))->with('error', 'Alguma Coisa Deu Errado, Não Conseguimos Proceguir No Processo De Adoção!');
        }
        return redirect()->route('pet.index', compact('pets'))->with('success', 'Parabens Voce Demonstrou Interesse Pelo Pet. Logo O Responsavel Entrara Em Contato.');
    }

}
