<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\PlanUser;
use App\Models\User;

class PlanUserController extends Controller
{
    public function storePlan_user(Request $request) {

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
