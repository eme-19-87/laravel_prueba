<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vaccine;

class VaccineController extends Controller
{
    public function index()
    {
        $vaccine = Vaccine::all();
        
        return view('admin.vaccines.index', compact('vaccine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vaccines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:vaccines',
            'form' => 'required',
            'brand' => 'required',
            'dosis' => 'required',
            'caution' => 'required',
        ]);

        $vaccine = Vaccine::create($request->all());
        
        return redirect()->route('admin.vaccines.edit', $vaccine)->with('info', 'La Categoria se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccine $vaccine)
    {
        return view('admin.vaccines.show', compact('vaccine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccine $vaccine)
    {
       
        return view('admin.vaccines.edit', compact('vaccine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccine $vaccine)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:vaccines,slug,$vaccine->id",
            'form' => 'required',
            'brand' => 'required',
            'dosis' => 'required',
            'caution' => 'required',
        ]);

        $vaccine->update($request->all());

        return redirect()->route('admin.vaccines.edit', $vaccine)->with('info', 'La categoria se actualizo con exito');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccine $vaccine)
    {
        $vaccine->delete();
        return redirect()->route('admin.vaccines.index')->with('info', 'La Categoria se elimino con exito');
    }
}
