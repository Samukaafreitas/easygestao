<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plan_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('plan_user_name');
            $table->foreignId('plan_id');
            $table->float('plan_user_value');
            $table->string('plan_user_date');
            $table->string('plan_user_number');
            $table->string('plan_user_operator');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_users');
    }
};
