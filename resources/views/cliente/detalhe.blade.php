@extends('layouts.app')

@section('content')

    <div class="panel-body">
        <p><b>Cliente:</b>{{ $cliente->nome }}</p>
        <p><b>Email:</b>{{ $cliente->email }}</p>
        <p><b>Endereço:</b>{{ $cliente->endereco }}</p>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Número</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

@endsection