@extends('layouts.main')
@section('title', 'EasyGestão')
@section('content')

        <div class="plans-create-container">
                <h1 class="create-info">Cadastrar Usuário:</h1>
                <form action="/users/" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="plan_user_name">Nome do Usuário:</label>
                        <input type="text" class="form-control" id="plan_user_name" name="plan_user_name">
                    </div>
                    <div class="form-group">
                        <label for="plan_id">Plano:</label>
                        <div class="plans-selection-container">
                            <select class="form-control" id="plan_id" name="plan_id">
                                @foreach($plans as $plan)
                                <option value="{{ $plan->id }}">{{ $plan->plan_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="plan_user_value">Valor da mensalidade:</label>
                        <input type="text" class="form-control" id="plan_user_value" name="plan_user_value">
                    </div>
                    <div class="form-group">
                        <label for="plan_user_date">Dia de vencimento:</label>
                        <select class="form-control" id="plan_user_date" name="plan_user_date">
                            <option value="1">1</option>
                            <option value="6">6</option>
                            <option value="10">10</option>
                            <option value="17">17</option>
                            <option value="21">21</option>
                            <option value="26">26</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="plan_user_number">Numero da Linha:</label>
                        <input type="text" class="form-control" id="plan_user_number" name="plan_user_number">
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="operator">Operadora:</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="plan_user_operator[]" value="vivo"> Vivo </br>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="plan_user_operator[]" value="claro"> Claro </br>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="plan_user_operator[]" value="tim"> Tim </br>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="plan_user_operator[]" value="others"> Outras </br>
                        </div>
                        <div>
                        <input type="submit" class="btn btn-primary" value="Salvar Usuário">
                        </div>
                    </div>
            </form>
        </div>

@endsection