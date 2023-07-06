<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('TelaEmpresarialProduto', compact('produtos'));
        //return view('TelaHomeCliente', compact('produtos'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        // Validação dos campos do formulário
        $request->validate([
            'nome' => 'required',
            'ativo' => 'boolean',
            'preco' => 'required|numeric',
            'descricao' => 'required',
            'id_cardapio' => 'required|exists:cardapios,id',
            'ingredientes' => 'nullable|array',
            'ingredientes.*' => 'exists:ingredientes,id',
        ]);

        // Criação do novo produto
        $produto = new Produto();
        $produto->nome_produto = $request->input('nome');
        $produto->eh_ativo_produto = $request->input('ativo') ?? false;
        $produto->preco_produto = $request->input('preco');
        $produto->descricao_produto = $request->input('descricao');
        $produto->id_cardapio = $request->input('id_cardapio');
        $produto->save();

        // Adição dos ingredientes relacionados ao produto
        if ($request->has('ingredientes')) {
            $ingredientes = $request->input('ingredientes');
            $produto->ingredientes()->attach($ingredientes);
        }

        // Redirecionamento para a página de sucesso ou exibição de mensagem
        return redirect()->route('produtos.index')->with('success', 'Produto cadastrado com sucesso!');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
