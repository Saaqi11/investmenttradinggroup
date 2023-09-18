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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('associated_search_terms');
            $table->string('category');
            $table->string('sub_category');
            $table->string('ticker');
            $table->string('exchange');
            $table->integer('up_percentage');
            $table->integer('down_percentage');
            $table->longText('html_data');
            $table->longText('css_data');
            $table->longText('js_data');
            $table->integer('width');
            $table->integer('height');
            $table->string('visibility_levels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
