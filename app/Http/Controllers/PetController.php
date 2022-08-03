<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PetController extends Controller
{
    public function index():View
    {
        return view('pet.index');
    }

    public function register():View
    {
        return view('pet.register');
    }

}
