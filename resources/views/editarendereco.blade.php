@extends('layouts.app', ["current" => "enderecos"])

@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('enderecos.update', $end['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="rua">Nome da Rua</label>
                <input type="text" class="form-control {{$errors->has('rua') ? 'is-invalid' : ''}}" name="rua" id="rua" placeholder="Nome da Rua" value="{{ $end['rua'] }}">
                @if($errors->has('rua'))
                <div class="invalid-feedback">
                    {{$errors->first('rua')}}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="numero">Numero</label>
                <input type="text" class="form-control {{$errors->has('numero') ? 'is-invalid' : ''}}" name="numero" id="numero" placeholder="Numero" value="{{ $end['numero'] }}">
                @if($errors->has('numero'))
                <div class="invalid-feedback">
                    {{$errors->first('numero')}}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control {{$errors->has('bairro') ? 'is-invalid' : ''}}" name="bairro" id="bairro" placeholder="Bairro" value="{{ $end['bairro'] }}">
                @if($errors->has('bairro'))
                <div class="invalid-feedback">
                    {{$errors->first('bairro')}}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control {{$errors->has('cidade') ? 'is-invalid' : ''}}" name="cidade" id="cidade" placeholder="Cidade" value="{{ $end['cidade'] }}">
                @if($errors->has('cidade'))
                <div class="invalid-feedback">
                    {{$errors->first('cidade')}}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="uf">UF</label>
                <input type="text" class="form-control {{$errors->has('uf') ? 'is-invalid' : ''}}" name="uf" id="uf" placeholder="UF" value="{{ $end['uf'] }}">
                @if($errors->has('uf'))
                <div class="invalid-feedback">
                    {{$errors->first('uf')}}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" class="form-control {{$errors->has('cep') ? 'is-invalid' : ''}}" name="cep" id="cep" placeholder="CEP" value="{{ $end['cep'] }}">
                @if($errors->has('cep'))
                <div class="invalid-feedback">
                    {{$errors->first('cep')}}
                </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>
@endsection