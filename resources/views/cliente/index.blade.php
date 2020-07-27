@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lista de clientes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                          
<p><a href="{{route('cliente.adicionar')}}" class="btn btn-info">Adicionar</a></p>                            
        
<table class="table table-bordered">
    <thead>
        <th>#</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Endereço</th>
        <th>Ação</th>
    </thead>
    <tbody>
  @foreach($clientes as $cliente)
        <tr>
            <th scope="row">{{$cliente->id}}</th>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->endereco}}</td>
            <td>
                <a href="{{route('cliente.detalhe', $cliente->id)}}" class="btn btn-defaul">Detalhe</a>
                <a href="{{route('cliente.editar', $cliente->id)}}" class="btn btn-warning">Editar</a>
                <a href="javascript:(confirm('Deletar esse registro?')? window.location.href='{{ route('cliente.deletar', $cliente->id) }}':false)" class="btn btn-danger">Deletar</a>
            </td>
        </tr>
@endforeach

    </tbody>
</table>


<div align="center">
    {!! $clientes->links() !!}
</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
