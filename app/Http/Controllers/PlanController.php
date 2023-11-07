<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\PlanUser;
use App\Models\User;

class PlanController extends Controller
{
    public function index() {

        $plans = Plan::all();
        $planusers = PlanUser::all();

        return view('welcome', ['plans' => $plans, 1, 'planusers' => $planusers]);
    }

    public function plans() {

        $plans = Plan::all();
        $total = $plans->sum('plan_value');

        return view('plans.plans', ['plans' => $plans, 'total' => $total]);
    }

    public function create() {
        return view('plans.create');
    }

    public function storePlan(Request $request) {

        $validated = $request->validate(
            [
                'plan_name' => 'required|unique:plans|max:100',
                'plan_value' => 'required',
                'plan_date' => 'required',
                'plan_additional_lines' => 'required',
                'plan_operator' => 'required'
            ],[
                'plan_name.required'=>'O Nome do plano é obrigatório.',
                'plan_name.unique'=>'O Nome do plano que deseja adicionar já está em uso, identifique-o de outra forma.',
                'plan_name.max'=>'O Nome do plano é muito longo.',
                'plan_value.required'=>'O valor do plano é obrigatório.',
                'plan_date.required'=>'A data de vencimento é obrigatória.',
                'plan_additional_lines.required'=>'A quantidade de linhas adicionais é obrigatório.',
                'plan_operator'=>'A seleção da Operadora é obrigatória.'
            ]
            );

        $plan = new Plan;

        $plan->plan_name = $request->plan_name;
        $plan->plan_value = $request->plan_value;
        $plan->plan_date = $request->plan_date;
        $plan->plan_additional_lines = $request->plan_additional_lines;
        $plan->plan_operator = $request->plan_operator;


        //$user = auth()->user();
        $plan->plancadastro_id = 1;

        $plan->save();

            return redirect('/plans/list')->with('msg', 'Plano cadastrado com sucesso!');
        

    }

    public function destroy($id) {
        Plan::findOrFail($id)->delete();
        return redirect('/plans/list')->with('msg', 'Plano excluido com sucesso!');
    }

    public function edit($id) {
        $plan = Plan::findOrFail($id);

        return view('plans.edit', ['plan' => $plan]);
    }

    public function update(Request $request) {
        $data = $request->all();
        Plan::findOrFail($request->id)->update($data);

        return redirect('/plans/list')->with('msg', 'Plano editado com Sucesso');
    }
}
