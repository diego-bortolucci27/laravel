@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <ol class="breadcrumb panel-head">
                    <li><a href="{{route('cliente.index')}}">Cliente</a> |<li>
                    <li>Adicionar</li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="container">
    <div class="row">
        <h2> Telefones </h2>
    </div>
    <div class="col-md-8">
        <form action="" method="post">
            <div class="form-group">
            <label for="titulo">titulo</label>
            <input type="text" name="nome" class="form-control" id="titulo" aria-describedby="titulo" name="titulo">
            <small id="titulo" class="form-text text-muted">Coloque o titulo do telefone</small>
        </div>
        <div class="form-group">
            <label for="telefone">Número do Telefone</label>
            <input type="text" name="nome" class="form-control" id="telefone" aria-describedby="telefone" name="telefone">
            <small id="telefone" class="form-text text-muted">Coloque o telefone</small>
        </div>
    </div>
</div>