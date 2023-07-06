<?php

namespace App\Http\Controllers;

use App\Models\FormaPagamento;
use Illuminate\Http\Request;

class FormaPagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forma_pagamentos = FormaPagamento::all();
        return view('TelaEmpresarialFormaPagamento', compact('forma_pagamentos'));
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
            'prazo' => 'required|boolean',
            'parcela' => 'integer',
        ]);

        // Criação da nova forma de pagamento
        $formaPagamento = new FormaPagamento();
        $formaPagamento->nome_forma_pgto = $request->input('nome');
        $formaPagamento->eh_ativo_forma_pgto = $request->input('ativo') ?? false;
        $formaPagamento->eh_prazo = $request->input('prazo');
        $formaPagamento->parcela = $request->input('parcela');
        $formaPagamento->save();

        // Redirecionamento para a página de sucesso ou exibição de mensagem
        return redirect()->route('formas-pagamento.index')->with('success', 'Forma de pagamento cadastrada com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(FormaPagamento $formaPagamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormaPagamento $formaPagamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormaPagamento $formaPagamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormaPagamento $formaPagamento)
    {
        //
    }
}
