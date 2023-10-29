<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class PetController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $pets = $user->pets->all();
        return view('pets.index', compact('pets'));
    }

    public function show(Pet $pet){
        return view('pets.show', compact('pet'));
    }

    public function create(User $user){
        return view('pets.create', compact('user'));
    }

    public function edit(Pet $pet)
    {
        return view('pets.edit', compact('pet'));
    }
    
    public function update(Request $request, Pet $pet){

    }

    public function store(Request $request){

        $request->file('file')->store('pet');
        $pet = Pet::create($request->all());

        if($request->file('file')){
            $url = Storage::put('public/pet', $request->file('file'));
            $pet->image()->create([
                'url' => $url
            ]);}

        return redirect()->route('pets.index', $pet)->with('info', 'Mascota agregada con exito');
    }
}
