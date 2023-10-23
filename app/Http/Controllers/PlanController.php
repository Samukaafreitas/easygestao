<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\User_plan;
use App\Models\User;

class PlanController extends Controller
{
    public function index() {

        $plans = Plan::all();

        return view('welcome', ['plans' => $plans]);
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
}
