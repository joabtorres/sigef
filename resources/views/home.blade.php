@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3 class="">Dashboard</h3>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li> --}}
                        <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-speedometer2"></i>
                            Inicial</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-muted">Funcionários</h5>
                        <h2 class="fw-bold">25</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-muted">Usuários</h5>
                        <h2 class="fw-bold">5</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-muted">Empresas / Atividades</h5>
                        <h2 class="fw-bold">3</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-muted">Escalas Cadastradas</h5>
                        <h2 class="fw-bold">12</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
