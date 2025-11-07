@extends('layouts.app')

@section('title', 'Lista de Funcionários')

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
                        <li class="breadcrumb-item active"><i class="bi bi-people"></i> Funcionários</li>
                    </ol>
                </nav>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        <div data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Collapsible Group Item #1
                        </div>
                    </div>
                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body">
                            Content for item #1
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Cargo</th>
                    <th>Admissão</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->role ?? '-' }}</td>
                        <td>{{ $employee->admission_date ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
