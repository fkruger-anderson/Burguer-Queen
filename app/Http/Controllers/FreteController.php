<?php

namespace App\Http\Controllers;

use App\Models\Frete;
use Illuminate\Http\Request;

class FreteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fretes = Frete::all();
        return view('TelaEmpresarialFrete', compact('fretes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TelaEmpresarialFreteCadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('TelaEmpresarialFreteCadastro');
    }

    /**
     * Display the specified resource.
     */
    public function show(Frete $frete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Frete $frete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Frete $frete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Frete $frete)
    {
        //
    }
}
