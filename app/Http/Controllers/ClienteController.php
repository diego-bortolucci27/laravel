<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$clientes = \App\Cliente::all();
       // dd($clientes); // var_dump
       $clientes = \App\Cliente::paginate(5);
       return view('cliente.index', compact('clientes'));
    }

    public function detalhe($id)
    {
        $cliente = \App\Cliente::find($id);
        return view('cliente.detalhe', compact('cliente'));
    }

    public function adicionar()
    {
        return view('cliente.adicionar');
    }

    public function salvar(Request $request)
    {
        \App\Cliente::create($request->all());
        return redirect()->route('cliente.adicionar');
    }

    public function editar($id)
    {
        $cliente = \App\Cliente::find($id);
        return view('cliente.editar', compact('cliente'));
    }

    public function atualizar(Request $request, $id)
    {
        \App\Cliente::find($id)->update($request->all());
        return redirect()->route('cliente.index');
    }

    public function deletar($id)
    {
        $cliente = \App\Cliente::find($id);
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
