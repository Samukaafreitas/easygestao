<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MonthlyPayment extends Model
{
    use HasFactory;

    public function plan_user() {
        return $this->belongsTo('\App\Models\Plan_User');
    }

    public function plan() {
        return $this->belongsTo('App\Models\Plan');
    }


}
