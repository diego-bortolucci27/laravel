@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <ol class="breadcrumb panel-head">
                <li><a href="{{route('cliente.index')}}">Cliente</a> |  </li>
                    <li>Editar</li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<form action="{{ route('cliente.atualizar', $cliente->id) }}" class="" method="post">
{{csrf_field()}}
<input type="hidden" name="_method" value="put">
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="nome" class="text form-control" placeholder="Nome do Cliente" value="{{$cliente->nome}}">
    </div>
    <div class="email form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email do Cliente" value="{{$cliente->email}}">
    </div>
    <div class="email form-group">
        <label for="">Endereço</label>
        <input type="text" name="endereco" class="form-control" placeholder="Endereço do Cliente" value="{{$cliente->endereco}}">
    </div>
    <button class="btn btn-info">Atualizar</button>
</form>
<!--h1>Página de Cadastro</h1-->

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
