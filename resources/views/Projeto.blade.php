@extends('layouts.app', ["current" => "projetos"])

@section('body')
<div class="row">
    <div class="container col-sm-8 offset-md-2">
        <div class="card border">
            <div class="card-header">
                <h5 class="card-title">Cadastro de Projeto</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover" id="tabelaprojetos">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nome </th>
                            <th>Estimativa de Horas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projetos as $proj)
                        <tr>
                            <td>{{$proj->id}}</td>
                            <td>{{$proj->nome}}</td>
                            <td>{{$proj->estimativa_horas}}</td>
                            <td>
                                <a href="{{ route('projetos.edit', $proj['id']) }}" class="btn btn-sm btn-primary">Editar</a> |
                                <form action="{{ route('projetos.destroy', $proj['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/projetos/create" class="btn btn-sm btn-primary" role="button">Novo Projeto</a>
            </div>
        </div>
    </div>
</div>
@endsection