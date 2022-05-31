@extends('layouts.app', ["current" => "clientes"])

@section('body')
<div class="row">
    <div class="container col-sm-8 offset-md-2">
        <div class="card border">
            <div class="card-header">
                <h5 class="card-title">Cadastro de Cliente</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover" id="tabelaclientes">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nome</th>
                            <th>Endereco ID</th>
                            <th>Idade</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $c)
                        <tr>
                            <td>{{$c->id}}</td>
                            <td>{{$c->nome}}</td>
                            <td>{{$c->endereco_id}}</td>
                            <td>{{$c->idade}}</td>
                            <td>{{$c->email}}</td>
                            <td>
                                <a href="{{ route('clientes.edit', $c['id']) }}" class="btn btn-sm btn-primary">Editar</a> |
                                <form action="{{ route('clientes.destroy', $c['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/clientes/create" class="btn btn-sm btn-primary" role="button">Novo Cliente</a>
            </div>
        </div>
    </div>
</div>
@endsection