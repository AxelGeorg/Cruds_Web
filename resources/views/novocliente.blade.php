@extends('layouts.app', ["current" => "clientes"])

@section('body')
<div class="row">
    <div class="container col-sm-8 offset-md-2">
        <div class="card border">
            <div class="card-header">
                <h5 class="card-title">Cadastro de Cliente</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('clientes.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="nome">Nome do Cliente</label>
                        <input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" name="nome" id="nome" placeholder="Nome do Cliente">
                        @if($errors->has('nome'))
                        <div class="invalid-feedback">
                            {{$errors->first('nome')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="endereco_id">Endereco do Cliente</label>
                        <input type="text" class="form-control {{$errors->has('endereco_id') ? 'is-invalid' : ''}}" name="endereco_id" id="endereco_id" placeholder="Endereco do Cliente">
                        @if($errors->has('endereco_id'))
                        <div class="invalid-feedback">
                            {{$errors->first('endereco_id')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="idade">Idade do Cliente</label>
                        <input type="number" class="form-control {{$errors->has('idade') ? 'is-invalid' : ''}}" name="idade" id="idade" placeholder="Idade do Cliente">
                        @if($errors->has('idade'))
                        <div class="invalid-feedback">
                            {{$errors->first('idade')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">Email do Cliente</label>
                        <input type="text" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" name="email" id="email" placeholder="E-mail do Cliente">
                        @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{$errors->first('email')}}
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