<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PetController extends Controller
{
    public function index():View
    {
        return view('pet.index');
    }
}
