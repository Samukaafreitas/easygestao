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
        Schema::table('plan_users', function (Blueprint $table) {
            $table->foreignId('plan_usercadastro_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plan_users', function (Blueprint $table) {
            $table->dropColumn('plan_usercadastro_id');
        });
    }
};
