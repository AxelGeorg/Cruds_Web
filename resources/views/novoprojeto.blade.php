@extends('layouts.app', ["current" => "projetos"])

@section('body')
<div class="row">
    <div class="container col-sm-8 offset-md-2">
        <div class="card border">
            <div class="card-header">
                <h5 class="card-title">Cadastro de Projeto</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('projetos.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="nome">Nome do Projeto</label>
                        <input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" name="nome" id="nome" placeholder="Nome do Projeto">
                        @if($errors->has('nome'))
                        <div class="invalid-feedback">
                            {{$errors->first('nome')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="estimativa_horas">Estimativa de horas</label>
                        <input type="text" class="form-control {{$errors->has('estimativa_horas') ? 'is-invalid' : ''}}" name="estimativa_horas" id="estimativa_horas" placeholder="Estimativa de horas">
                        @if($errors->has('estimativa_horas'))
                        <div class="invalid-feedback">
                            {{$errors->first('estimativa_horas')}}
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