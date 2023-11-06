@extends('layouts.main')
@section('title', 'EasyGestão')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="plans-create-container">
        <h1 class="create-info">Cadastrar plano:</h1>
        <form action="/plans/" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="plan_name">Nome do Plano:</label>
                <input type="text" class="form-control" id="plan_name" name="plan_name">
            </div>
            <div class="form-group">
                <label for="plan_value">Valor do Plano:</label>
                <input type="text" class="form-control" id="plan_value" name="plan_value">
            </div>
            <div class="form-group">
                <label for="plan_date">Dia de vencimento:</label>
                <input type="text" class="form-control" id="plan_date" name="plan_date">
            </div>
            <div class="form-group">
                <label for="plan_additional_lines">Numero de Multivivos (opcional):</label>
                <input type="text" class="form-control" id="plan_additional_lines" name="plan_additional_lines">
            </div>
            <div class="form-group">
                <div>
                    <label for="platform">Operadora:</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="plan_operator[]" value="vivo"> Vivo </br>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="plan_operator[]" value="claro"> Claro </br>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="plan_operator[]" value="tim"> Tim </br>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="plan_operator[]" value="others"> Outras </br>
                </div>
                <div>
                <input type="submit" class="btn btn-primary" value="Salvar Plano">
                </div>
            </div>
    </form>
</div>

@endsection