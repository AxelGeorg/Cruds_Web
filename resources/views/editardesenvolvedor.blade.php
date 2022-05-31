@extends('layouts.app', ["current" => "desenvolvedores"])

@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('desenvolvedores.update', $dev['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome do Desenvolvedor</label>
                <input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" name="nome" id="nome" placeholder="Nome do Desenvolvedo" value="{{ $dev['nome'] }}">
                @if($errors->has('nome'))
                <div class="invalid-feedback">
                    {{$errors->first('nome')}}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="cargo">Cargo do Desenvolvedor</label>
                <input type="text" class="form-control {{$errors->has('cargo') ? 'is-invalid' : ''}}" name="cargo" id="cargo" placeholder="Cargo do Desenvolvedor" value="{{ $dev['cargo'] }}">
                @if($errors->has('cargo'))
                <div class="invalid-feedback">
                    {{$errors->first('cargo')}}
                </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>
@endsection