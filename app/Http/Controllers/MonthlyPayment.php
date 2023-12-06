<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\PlanUser;

class MonthlyPayment extends Controller
{
    public function payments()
    {
        $plans = Plan::all();
        $planUsers = PlanUser::all();

        return view('payments.payments', ['plans' => $plans, 'planUsers' => $planUsers]);
    }
}
