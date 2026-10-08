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

    <div class="p-4 p-md-5 flex-grow-1">

        @if (session()->has('sucesso'))
        <div class="alert alert-success rounded-4 text-center mb-4">{{ session('sucesso') }}</div>
        @endif

        <div class="card border-0 shadow-sm rounded-4 bg-white p-4 p-md-5">

            <div class="mt-5">
                <form class="row g-3" wire:submit.prevent='update'>
                    <div class="col-12">
                        <label for="nome" class="form-label">NOME</label>
                        <input type="text" class="form-control" id="nome" wire:model='nome'>
                    </div>
                    <div class="col-12">
                        <label for="descricao" class="form-label">DESCRIÇÃO</label>
                        <input type="text" class="form-control" id="valor" wire:model='valor'>
                    </div>
                    <div class="col-md-12">
                        <label for="status" class="form-label">STATUS</label>
                        <input type="text" class="form-control" id="status" wire:model='status'>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>