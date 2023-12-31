<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanUser extends Model
{
    use HasFactory;

    public function plan() {
        return $this->belongsTo('App\Models\Plan');
    }

    protected $casts = [
        'plan_user_operator' => 'array'
    ];
}
