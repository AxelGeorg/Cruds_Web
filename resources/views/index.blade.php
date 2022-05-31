@extends('layouts.app', ["current" => "home"])

@section('body')
<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de clientes</h5>
                    <p class="card=text">
                        Aqui você cadastra todos os seus clientes.
                        Só não se esqueça de cadastrar previamente algum endereco
                    </p>
                    <a href="/clientes" class="btn btn-primary">Cadastre seus clientes</a>
                </div>
            </div>

            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Enderecos</h5>
                    <p class="card=text">
                        Cadastre os enderecos dos seus clientes
                    </p>
                    <a href="/enderecos/create" class="btn btn-primary">Cadastre seus Enderecos</a>
                </div>
            </div>

            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Desenvolvedores</h5>
                    <p class="card=text">
                        Aqui você cadastra todos os seus Devs.
                    </p>
                    <a href="/desenvolvedores/create" class="btn btn-primary">Cadastre seus Desenvolvedores</a>
                </div>
            </div>
            
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Projetos</h5>
                    <p class="card=text">
                        Aqui você cadastra todos os seus projetos.
                    </p>
                    <a href="/projetos/create" class="btn btn-primary">Cadastre seus Projetos</a>
                </div>
            </div>

            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Alocacoes</h5>
                    <p class="card=text">
                        Aqui você cadastra todas as Alocacoes.
                        Pode juntar projetos e devs.
                    </p>
                    <a href="/alocacaos/create" class="btn btn-primary">Cadastre suas Alocacoes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
