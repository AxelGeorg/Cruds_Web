@extends('layouts.app', ["current" => "projetos"])

@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('projetos.update', $proj['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome do Projeto</label>
                <input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" name="nome" id="nome" placeholder="Nome do Projeto" value="{{ $proj['nome'] }}">
                @if($errors->has('nome'))
                <div class="invalid-feedback">
                    {{$errors->first('nome')}}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="estimativa_horas">Estimativa de horas</label>
                <input type="text" class="form-control {{$errors->has('estimativa_horas') ? 'is-invalid' : ''}}" name="estimativa_horas" id="estimativa_horas" placeholder="estimativa_horas" value="{{ $proj['estimativa_horas'] }}">
                @if($errors->has('estimativa_horas'))
                <div class="invalid-feedback">
                    {{$errors->first('estimativa_horas')}}
                </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>
@endsection