@extends('layouts.app', ["current" => "desenvolvedores"])

@section('body')
<div class="row">
    <div class="container col-sm-8 offset-md-2">
        <div class="card border">
            <div class="card-header">
                <h5 class="card-title">Cadastro de Desenvolvedor</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('desenvolvedores.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="nome">Nome do Desenvolvedor</label>
                        <input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" name="nome" id="nome" placeholder="Nome do Desenvolvedor">
                        @if($errors->has('nome'))
                        <div class="invalid-feedback">
                            {{$errors->first('nome')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="cargo">Cargo do Desenvolvedor</label>
                        <input type="text" class="form-control {{$errors->has('cargo') ? 'is-invalid' : ''}}" name="cargo" id="cargo" placeholder="Cargo do Desenvolvedor">
                        @if($errors->has('cargo'))
                        <div class="invalid-feedback">
                            {{$errors->first('cargo')}}
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