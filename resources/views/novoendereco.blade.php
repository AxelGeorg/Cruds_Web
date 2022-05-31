@extends('layouts.app', ["current" => "enderecos"])

@section('body')
<div class="row">
    <div class="container col-sm-8 offset-md-2">
        <div class="card border">
            <div class="card-header">
                <h5 class="card-title">Cadastro de Enderecos</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('enderecos.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="rua">Nome da Rua</label>
                        <input type="text" class="form-control {{$errors->has('rua') ? 'is-invalid' : ''}}" name="rua" id="rua" placeholder="Nome da Rua">
                        @if($errors->has('rua'))
                        <div class="invalid-feedback">
                            {{$errors->first('rua')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="numero">Numero</label>
                        <input type="number" class="form-control {{$errors->has('numero') ? 'is-invalid' : ''}}" name="numero" id="numero" placeholder="Numero">
                        @if($errors->has('numero'))
                        <div class="invalid-feedback">
                            {{$errors->first('numero')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control {{$errors->has('bairro') ? 'is-invalid' : ''}}" name="bairro" id="bairro" placeholder="Bairro">
                        @if($errors->has('bairro'))
                        <div class="invalid-feedback">
                            {{$errors->first('bairro')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control {{$errors->has('cidade') ? 'is-invalid' : ''}}" name="cidade" id="cidade" placeholder="Cidade">
                        @if($errors->has('cidade'))
                        <div class="invalid-feedback">
                            {{$errors->first('cidade')}}
                        </div>
                        @endif
                    </div>

                    
                    <div class="form-group">
                        <label for="uf">UF</label>
                        <input type="text" class="form-control {{$errors->has('uf') ? 'is-invalid' : ''}}" name="uf" id="uf" placeholder="UF">
                        @if($errors->has('uf'))
                        <div class="invalid-feedback">
                            {{$errors->first('uf')}}
                        </div>
                        @endif
                    </div>

                    
                    <div class="form-group">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control {{$errors->has('cep') ? 'is-invalid' : ''}}" name="cep" id="cep" placeholder="CEP">
                        @if($errors->has('cep'))
                        <div class="invalid-feedback">
                            {{$errors->first('cep')}}
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