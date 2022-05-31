@extends('layouts.app', ["current" => "alocacaos"])

@section('body')
<div class="row">
    <div class="container col-sm-8 offset-md-2">
        <div class="card border">
            <div class="card-header">
                <h5 class="card-title">Cadastro de Alocacao</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover" id="tabelaalocacaos">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Desenvolvedor ID</th>
                            <th>Projeto ID</th>
                            <th>Horas Semanais</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alocacaos as $alo)
                        <tr>
                            <td>{{$alo->id}}</td>
                            <td>{{$alo->desenvolvedor_id}}</td>
                            <td>{{$alo->projeto_id}}</td>
                            <td>{{$alo->horas_semanais}}</td>
                            <td>
                                <a href="{{ route('alocacaos.edit', $alo['id']) }}" class="btn btn-sm btn-primary">Editar</a> |
                                <form action="{{ route('alocacaos.destroy', $alo['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/alocacaos/create" class="btn btn-sm btn-primary" role="button">Nova Alocacao</a>
            </div>
        </div>
    </div>
</div>
@endsection