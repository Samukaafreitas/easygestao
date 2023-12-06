<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\PlanUser;
use App\Models\MonthlyPayment;
use App\Models\User;

class PlanUserController extends Controller
{
    public function storePlan_user(Request $request) {

        $validated = $request->validate(
            [
                'plan_user_name'=>'required|unique:plan_users|max:100',
                'plan_user_value'=>'required',
                'plan_user_date'=>'required',
                'plan_user_number'=>'required|regex:/\d{2}[0-9]{9}/|min:11|unique:plan_users',
                'plan_user_operator'=>'required'
            ],[
                'plan_user_name.required'=>'O nome do usuário é obrigatório.',
                'plan_user_name.unique'=>'O nome de usuário já está em uso, utilize outro.',
                'plan_user_name.max'=>'O nome é muito longo.',
                'plan_user_value.required'=>'O valor da mensalidade é obrigatório.',
                'plan_user_date.required'=>'A data de vencimento é obrigatória.',
                'plan_user_number.required'=>'O numero de telefone é obrigatório.',
                'plan_user_number.regex'=>'O numero inserido não possui valor válido, utilize o padrão a seguir: DDD+Numero com um total de 11 dígitos.',
                'plan_user_number.min'=>'O numero precisa ter 11 dígitos.',
                'plan_user_number.unique'=>'O numero já está em uso.',
                'plan_user_operator'=>'Selecione uma operadora.'
            ]
        );

        $Plan_user = new PlanUser;
        
        
        $Plan_user->plan_user_name = $request->plan_user_name;
        $Plan_user->plan_id = $request->plan_id;
        $Plan_user->plan_user_value = $request->plan_user_value;
        $Plan_user->plan_user_date = $request->plan_user_date;
        $Plan_user->plan_user_number = $request->plan_user_number;
        $Plan_user->plan_user_operator = $request->plan_user_operator;


        //$user = auth()->user();
        $Plan_user->plan_usercadastro_id = 1;

        $Plan_user->save();

        try {
            return redirect('/users/list')->with('msg', 'Usuário cadastrado com sucesso!');
            } catch (\Exception $e) {
                return redirect()->back()->withInput()->with('msg', 'Ocorreu um erro, tente novamente.');
            }

    }

    public function destroy($id) {
        PlanUser::findOrFail($id)->delete();

        return redirect('/users/list')->with('msg', 'Usuário excluido com sucesso!');
    }

    public function edit($id) {
        $planUser = PlanUser::findOrFail($id);
        $plans = Plan::all();

        return view('users.edit', ['planUser' => $planUser, 'plans' => $plans]);
    }

    public function update(Request $request) {
        $data = $request->all();
        PlanUser::findOrFail($request->id)->update($data);

        return redirect('/users/list')->with('msg', 'Usuário editado com Sucesso');
    }

    public function plan_User_Create() {
        $plans = Plan::all();
        return view('users.create', ['plans' => $plans]);
    }

    public function plan_Users() {
        $plan_users = PlanUser::all();
        $total = $plan_users->sum('plan_user_value');
        return view('users.users', ['plan_users' => $plan_users, 'total' => $total]);
    }
}
