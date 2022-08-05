<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetFormRequest;
use App\Models\Interested;
use App\Models\Pet;
use App\Models\PetOwner;
use App\Repositories\PetOwnerRepository;
use App\Http\Requests\PetOwnerFormRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PetOwnerController extends Controller
{
    public $repository;

    public function __construct(PetOwnerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index():View
    {
        $petOwnerId = Auth::guard('owners')->user()->id;
        $petOwner = PetOwner::find($petOwnerId);
        $petOwner->load('pets');
        return view('owner.index', compact('petOwner'));
    }

    public function register():View
    {
        $states = config('states');
        return view('owner.register',compact('states'));
    }

    public function store(PetOwnerFormRequest $request)
    {
        $owner = $request->all();
        $petOwner = $this->repository->create($owner);
        if($petOwner == false){
            return back()->withErrors('email');
        }

        return redirect()->route('pet.register');
    }

    public function petRegister():View
    {

        return view('pet.register');
    }

    public function petStore(PetFormRequest $request):RedirectResponse
    {
        $pet = $request->all();
        $response = $this->repository->createPet($pet);
        return redirect()->route('owner.index');
    }

    public function interested():View
    {
        $interested = Interested::with('user', 'pet')->get();
        return view('owner.interested', compact('interested'));
    }

    public function deleteInterested(int $id):RedirectResponse
    {
        Interested::find($id)->delete();
        $interested = Interested::with('user', 'pet')->get();
        return redirect()->route('owner.interested', compact('interested'))->with('success', 'Deletado Com Sucesso!');
    }

    public function petEdit(int $id):View
    {
        $pet = Pet::find($id);
        return view('pet.edit', compact('pet'));
    }

    public function petUpdate(int $id, PetFormRequest $request)
    {
        $pet = $request->all();
        $response = $this->repository->editPet($id, $pet);
       if(!$response == true){
            return redirect()->back()->with('error', 'Alguma Coisa Deu Errado, Não Conseguimos Editar Esse Pet!');
        }
        return redirect()->route('owner.index')->with('success', 'Pet Editado Com Sucesso!');
    }

    public function petDelete(int $id):RedirectResponse
    {
        $response = $this->repository->petDelete($id);
        if(!$response == true){
            return redirect()->back()->with('error', 'Alguma Coisa Deu Errado, Não Conseguimos Deletar Esse Pet!');
        }
        return redirect()->back()->with('success', 'Pet Deletado Com Sucesso!');
    }
}
