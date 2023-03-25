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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->date("expiration_time");
            $table->date("date_of_use");
            $table->integer("assigned_user_level");
            $table->string("discount_type");
            $table->float("discount_value");
            $table->integer("no_of_used_time");
            $table->float("shared_value");
            $table->enum("status", ['Active', 'InActive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
