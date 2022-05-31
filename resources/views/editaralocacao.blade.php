@extends('layouts.app', ["current" => "alocacaos"])

@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('alocacaos.update', $alo['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="desenvolvedor_id">Desenvolvedor ID</label>
                <input type="text" class="form-control {{$errors->has('desenvolvedor_id') ? 'is-invalid' : ''}}" name="desenvolvedor_id" id="desenvolvedor_id" placeholder="Desenvolvedor ID" value="{{ $alo['desenvolvedor_id'] }}">
                @if($errors->has('desenvolvedor_id'))
                <div class="invalid-feedback">
                    {{$errors->first('desenvolvedor_id')}}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="projeto_id">Projeto ID</label>
                <input type="text" class="form-control {{$errors->has('projeto_id') ? 'is-invalid' : ''}}" name="projeto_id" id="projeto_id" placeholder="Projeto ID" value="{{ $alo['projeto_id'] }}">
                @if($errors->has('projeto_id'))
                <div class="invalid-feedback">
                    {{$errors->first('projeto_id')}}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="horas_semanais">Horas Semanais</label>
                <input type="text" class="form-control {{$errors->has('horas_semanais') ? 'is-invalid' : ''}}" name="horas_semanais" id="horas_semanais" placeholder="Horas Semanaisr" value="{{ $alo['horas_semanais'] }}">
                @if($errors->has('horas_semanais'))
                <div class="invalid-feedback">
                    {{$errors->first('horas_semanais')}}
                </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>
@endsection