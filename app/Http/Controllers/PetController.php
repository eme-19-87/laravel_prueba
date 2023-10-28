<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\User;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        return view('pets.index', compact('pets'));
    }
    public function show(Pet $pet){
        return view('pets.show', compact('pet'));
    }
    public function create(User $user){
        return view('pets.create', compact('user'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'features' => 'required',
            'city' => 'required',
            'pet_type_id' => 'required',
            'user_id' => 'required',
        ]);

        $pet = Pet::create($request->all());
        
        return redirect()->route('pets.index', $pet)->with('info', 'Mascota agregada con exito');
    }
}
