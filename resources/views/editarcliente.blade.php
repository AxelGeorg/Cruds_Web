@extends('layouts.app', ["current" => "clientes"])

@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('clientes.update', $cli['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome do Cliente</label>
                <input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" name="nome" id="nome" placeholder="Nome do Cliente" value="{{ $cli['nome'] }}">
                @if($errors->has('nome'))
                <div class="invalid-feedback">
                    {{$errors->first('nome')}}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="endereco_id">Endereco do Cliente</label>
                <input type="text" class="form-control {{$errors->has('endereco_id') ? 'is-invalid' : ''}}" name="endereco_id" id="endereco_id" placeholder="Endereco do Cliente" value="{{ $cli['endereco_id'] }}">
                @if($errors->has('endereco_id'))
                <div class="invalid-feedback">
                    {{$errors->first('endereco_id')}}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="idade">Idade do Cliente</label>
                <input type="text" class="form-control {{$errors->has('idade') ? 'is-invalid' : ''}}" name="idade" id="idade" placeholder="Idade do Cliente" value="{{ $cli['idade'] }}">
                @if($errors->has('idade'))
                <div class="invalid-feedback">
                    {{$errors->first('idade')}}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="email">Email do Cliente</label>
                <input type="text" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" name="email" id="email" placeholder="E-mail do Cliente" value="{{ $cli['email'] }}">
                @if($errors->has('email'))
                <div class="invalid-feedback">
                    {{$errors->first('email')}}
                </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>
@endsection