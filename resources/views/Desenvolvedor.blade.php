@extends('layouts.app', ["current" => "desenvolvedores"])

@section('body')
<div class="row">
    <div class="container col-sm-8 offset-md-2">
        <div class="card border">
            <div class="card-header">
                <h5 class="card-title">Cadastro de Desenvolvedor</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover" id="tabeladesenvolvedores">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nome </th>
                            <th>Cargo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($desenvolvedores as $dev)
                        <tr>
                            <td>{{$dev->id}}</td>
                            <td>{{$dev->nome}}</td>
                            <td>{{$dev->cargo}}</td>
                            <td>
                                <a href="{{ route('desenvolvedores.edit', $dev['id']) }}" class="btn btn-sm btn-primary">Editar</a> |
                                <form action="{{ route('desenvolvedores.destroy', $dev['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/desenvolvedores/create" class="btn btn-sm btn-primary" role="button">Novo Desenvolvedor</a>
            </div>
        </div>
    </div>
</div>
@endsection