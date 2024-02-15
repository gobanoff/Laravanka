<?php

namespace App\Http\Controllers;

use App\Models\Uztvunka;
use App\Http\Requests\StoreUztvunkaRequest;
use App\Http\Requests\UpdateUztvunkaRequest;

class UztvunkaController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        $uztvunkos = Uztvunka::all();
        return view('uztvunka.index', ['uztvunkos' => $uztvunkos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('uztvunka.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $uztvunka = new Uztvunka;
        $uztvunka->juodi = 0;
        $uztvunka->rudi = 0;
        $uztvunka->save();

        return redirect()->route('uztvunka-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Uztvunka $uztvunka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Uztvunka $uztvunka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUztvunkaRequest $request, Uztvunka $uztvunka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Uztvunka $uztvunka)
    {
        //
    }
}
