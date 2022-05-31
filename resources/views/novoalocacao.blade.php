@extends('layouts.app', ["current" => "alocacaos"])

@section('body')
<div class="row">
    <div class="container col-sm-8 offset-md-2">
        <div class="card border">
            <div class="card-header">
                <h5 class="card-title">Cadastro de Alocacoes</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('alocacaos.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="desenvolvedor_id">Desenvolvedor ID</label>
                        <input type="text" class="form-control {{$errors->has('desenvolvedor_id') ? 'is-invalid' : ''}}" name="desenvolvedor_id" id="desenvolvedor_id" placeholder="Desenvolvedor ID">
                        @if($errors->has('desenvolvedor_id'))
                        <div class="invalid-feedback">
                            {{$errors->first('desenvolvedor_id')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="projeto_id">Projeto ID</label>
                        <input type="text" class="form-control {{$errors->has('projeto_id') ? 'is-invalid' : ''}}" name="projeto_id" id="projeto_id" placeholder="Projeto ID">
                        @if($errors->has('projeto_id'))
                        <div class="invalid-feedback">
                            {{$errors->first('projeto_id')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="horas_semanais">Horas Semanais</label>
                        <input type="text" class="form-control {{$errors->has('horas_semanais') ? 'is-invalid' : ''}}" name="horas_semanais" id="horas_semanais" placeholder="Horas Semanais">
                        @if($errors->has('horas_semanais'))
                        <div class="invalid-feedback">
                            {{$errors->first('horas_semanais')}}
                        </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection