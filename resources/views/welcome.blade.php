@extends('layouts.main')
@section('title', 'EasyGestão')
@section('content')

<div id="cards-container" class="container mt-5">
        <div class="row">
            <!-- Primeiro Card -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1><strong>Últimos os planos ativos:</strong></h1>
                    </div>
                </div>
            </div>

            <!-- Segundo Card -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1><strong>Últimos usuários ativos:</strong></h1>
                    </div>
                </div>
            </div>

            <!-- Terceiro Card -->
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h1><strong>Últimas faturas:</strong></h1>
                    </div>
                </div>
            </div>

            <!-- Quarto Card -->
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h1><strong>Usuários com pagamento pendente:</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection