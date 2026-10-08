<div class="container-fluid p-0 min-vh-100">

    <nav class="navbar" style="background-color: #c5cae6;" data-bs-theme="light">
        <div class="container-fluid">
            <a class="navbar-brand">IOT</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>

    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark border-end"
        style="width: 260px; min-height:100vh;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="bi bi-rocket-takeoff-fill text-white me-2 fs-4"></i>
            <span class="fs-4">PROJETO IOT </span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link " aria-current="page">
                    <i class="bi bi-house"></i>
                    Dahshboard
                </a>
            </li>
            <li>
                <a href="/ambiente/edit" class="nav-link active text-white">
                    <i class="bi bi-geo-alt"></i>
                    Ambiente
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-pin-map"></i>
                    Sensor
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-folder2-open"></i>
                    Registro
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle me-2 fs-4"></i>
                <strong>Perfil</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">Desconectar</a></li>
            </ul>
        </div>
    </div>

    <div class="mt-5">
        @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class=mb-3>
            <input type="text" wire:model.Live='search' placeholder="pesquisar..." class="form-control">
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">NOME</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">STATUS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ambiente as $a)
                <tr>
                    <td>{{$a->nome}}</td>
                    <td>{{$a->descricao}}</td>
                    <td>{{$a->status}}</td>
                    <td>
                        <a href="{{ route('ambiente.edit', ['id' => $a->id])}}" class="btn btn-sm btn-info">Editar</a>                                 
                        <button wire:click='delete({{$a->id}})' class="btn btn-sm btn-danger">Excluir</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>