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

<form action="{{route('cliente.salvar')}}" class="" method="post">
{{csrf_field()}}
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="nome" class="text form-control" placeholder="Nome do Cliente">
    </div>
    <div class="email form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email do Cliente">
    </div>
    <div class="email form-group">
        <label for="">Endereço</label>
        <input type="text" name="endereco" class="form-control" placeholder="Endereço do Cliente">
    </div>
    <button class="btn btn-info">Adicionar</button>
</form>
<!--h1>Página de Cadastro</h1-->

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
