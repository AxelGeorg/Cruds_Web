<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" arialabel="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li @if($current=="home" ) class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/">Home </a>
            </li>

            <li @if($current=="clientes" ) class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/clientes">Clientes</a>
            </li>

            <li @if($current=="enderecos" ) class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/enderecos">Endereços</a>
            </li>

            <li @if($current=="desenvolvedores" ) class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/desenvolvedores">Desenvolvedores</a>
            </li>

            <li @if($current=="projetos" ) class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/projetos">Projetos</a>
            </li>

            <li @if($current=="alocacaos" ) class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/alocacaos">Alocacoes</a>
            </li>
        </ul>
    </div>
</nav>
