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

    public function adicionar()
    {
        return view('cliente.adicionar');
    }

    public function salvar(Request $request)
    {
        \App\Cliente::create($request->all());
        return redirect()->route('cliente.adicionar');
    }
}
