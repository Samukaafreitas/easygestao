@extends('layouts.main')
@section('title', 'EasyGestão')
@section('content')




    @if(count($plans) > 0)
    <div class="btn-container">
        <a href="/plans/create"class="btn btn-success edit-btn"><ion-icon name="create-outline"></ion-icon>Adicionar Plano</a></td>
    </div>
    <div id="plans-container">
        <div class="title-container">
            <h1>Aqui estão seus planos cadastrados:</h1>
        </div>    
        <table>
            <thead id="table-head">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Plano</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Multivivos</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody id="myplans-container">
                @foreach($plans as $plan)
                    <tr>
                        <td class="hash">{{ $loop->index + 1 }}</td>
                        <td class="plan_name"><a href="/plan/{{ $plan->id }}">{{ $plan->plan_name }}</a></td>
                        <td class="plan_value">R$ {{ $plan->plan_value }},00</td>
                        <td class="plan_value">{{ $plan->plan_additional_lines }}</td>
                        <td class="actions">
                            <a href="/plans/edit/{{ $plan->id }}"class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a></td>
                        <td>
                        <form action="/plan/{{ $plan->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                <tr class="total-row">
                    <td><strong></strong></td>
                    <td><strong>Total</strong></td>
                    <td>R$ {{ number_format($total, 2) }}</td>
                </tr>
            </tbody>
        </table>
        
    @else
        <h2 class="noplans-create">Você não tem planos cadastrados... <a href="/plans/create">Clique aqui</a> para cadastrar.</h2>
    @endif
</div>

@endsection