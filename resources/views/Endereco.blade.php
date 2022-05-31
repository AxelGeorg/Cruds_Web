@extends('layouts.app', ["current" => "enderecos"])

@section('body')
<div class="row">
    <div class="container col-sm-8 offset-md-2">
        <div class="card border">
            <div class="card-header">
                <h5 class="card-title">Cadastro de Enderecos</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover" id="tabelaenderecos">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Rua   </th>
                            <th>Numero</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>UF    </th>
                            <th>CEP   </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enderecos as $e)
                        <tr>
                            <td>{{$e->id}}</td>
                            <td>{{$e->rua}}</td>
                            <td>{{$e->numero}}</td>
                            <td>{{$e->bairro}}</td>
                            <td>{{$e->cidade}}</td>
                            <td>{{$e->uf}}</td>
                            <td>{{$e->cep}}</td>
                            <td>
                                <a href="{{ route('enderecos.edit', $e['id']) }}" class="btn btn-sm btn-primary">Editar</a> |
                                <form action="{{ route('enderecos.destroy', $e['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/enderecos/create" class="btn btn-sm btn-primary" role="button">Novo endereco</a>
            </div>
        </div>
    </div>
</div>
@endsection