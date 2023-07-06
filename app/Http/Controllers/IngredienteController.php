<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredientes = Ingrediente::all();
        return view('TelaEmpresarialIngrediente', compact('ingredientes'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function cadastro()
    {
       return view('TelaEmpresarialIngredienteCadastro');
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required',
            'ativo' => 'required|boolean',
        ]);


        // Criação do novo ingrediente
        Ingrediente::create([
            'nome_ingrediente' => $request->input('nome'),
            'eh_ativo_ingrediente' => $request->input('ativo'),
        ]);


        // Redirecionamento de volta à página de consulta
        return redirect()->route('TelaEmpresarialIngrediente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Ingrediente $ingrediente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingrediente $ingrediente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingrediente $ingrediente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingrediente $ingrediente)
    {
        //
    }
}
