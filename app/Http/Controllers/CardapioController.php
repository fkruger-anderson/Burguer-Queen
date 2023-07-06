<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use Illuminate\Http\Request;

class CardapioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos campos do formulário
        $request->validate([
            'nome' => 'required',
            'ativo' => 'boolean',
            'tem_ingrediente' => 'boolean',
        ]);


        // Criação do novo cardápio
        $cardapio = new Cardapio();
        $cardapio->nome_cardapio = $request->input('nome');
        $cardapio->eh_ativo_cardapio = $request->input('ativo') ?? false;
        $cardapio->tem_ingrediente = $request->input('tem_ingrediente') ?? false;
        $cardapio->save();


        // Redirecionamento para a página de sucesso ou exibição de mensagem
        return redirect()->route('cardapios.index')->with('success', 'Cardápio cadastrado com sucesso!');

        }

    /**
     * Display the specified resource.
     */
    public function show(Cardapio $cardapio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cardapio $cardapio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cardapio $cardapio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cardapio $cardapio)
    {
        //
    }
}
