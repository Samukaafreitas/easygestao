@extends('layouts.main')
@section('title', 'EasyGestão')
@section('content')




    @if(count($plan_users) > 0)
    <div class="btn-container">
        <a href="/users/create"class="btn btn-success edit-btn"><ion-icon name="create-outline"></ion-icon>Adicionar Usuário</a></td>
    </div>
    <div id="plans-container">
        <div class="title-container">
            <h1>Aqui estão seus planos cadastrados:</h1>
        </div>    
        <table>
            <thead id="table-head">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Plano</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody id="myplans-container">
                @foreach($plan_users as $plan_user)
                    <tr>
                        <td class="hash">{{ $loop->index + 1 }}</td>
                        <td class="plan_user_name"><a href="/plan/{{ $plan_user->id }}">{{ $plan_user->plan_user_name }}</a></td>
                        <td class="plan_user_value">R$ {{ $plan_user->plan_user_value }},00</td>
                        <td class="plan_user_value">{{ $plan_user->plan_user_number }}</td>
                        <td class="actions">
                            <a href="/plans/edit/{{ $plan_user->id }}"class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a></td>
                        <td>
                        <form action="/user/{{ $plan_user->id }}" method="POST">
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
        <h2 class="noplans-create">Você não tem usuários cadastrados... <a href="/users/create">Clique aqui</a> para cadastrar.</h2>
    @endif
</div>

@endsection