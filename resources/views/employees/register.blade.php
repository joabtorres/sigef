@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3 class="">Funcionários</h3>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="link-underline-light"><i
                                    class="bi bi-speedometer2"></i>
                                Inicial</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('employees') }}" class="link-underline-light"><i
                                    class="bi bi-people"></i> Funcionários</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-plus-square"></i> Cadastrar
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{-- MENSAGENS --}}
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                {{-- FORM --}}
                <form method="POST" action="{{ route('employees.register.post') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="card mb-3">
                        <div class="card-header"><i class="bi bi-person"></i> Funcionário</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <label for="validationName" class="form-label">Nome:</label>
                                    <input type="text" class="form-control" name="name" id="validationName" required>
                                    <div class="invalid-feedback">
                                        Informe o nome do funcionário
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="validationAdmin" class="form-label">Data de Admissão:</label>
                                    <input type="text" class="form-control date-input" name="admission_date"
                                        id="validationAdmin" required>
                                    <div class="invalid-feedback">
                                        Informe o CPF
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCPF" class="form-label">CPF:</label>
                                    <input type="text" class="form-control" name="cpf" id="validationCPF" required>
                                    <div class="invalid-feedback">
                                        Informe o CPF
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationRG" class="form-label">RG:</label>
                                    <input type="text" class="form-control" name="rg" id="validationRG" required>
                                    <div class="invalid-feedback">
                                        Informe o RG
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validation1" class="form-label">Data de Nascimento:</label>
                                    <input type="text" class="form-control date-input" name="birth_date"
                                        id="validation1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header"><i class="bi bi-geo-fill"></i> Endereço</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationAddress" class="form-label">Endereço:</label>
                                    <input type="text" class="form-control" name="address" id="validationAddress">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-success" type="submit"> <i class="bi bi-check-all"></i> Salvar</button>
                        <a href="{{ route('home') }}" class="btn btn-danger"><i class="bi bi-x"></i> Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
