<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $casts = [
        'plan_operator' => 'array'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function plan_user() {
        return $this->hasMany('\App\Models\Plan_User');
    }

    protected $appends = [
        'display'
    ];

    public function getDisplayAttribute(){
        return $this->plan_name;
    }

}
