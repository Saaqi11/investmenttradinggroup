<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('email_records', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->longText('recipient_ids')->nullable();
            $table->string('membership_levels')->nullable();
            $table->longText('message')->nullable();
            $table->string('attachment')->nullable();
            $table->tinyInteger('is_all')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_records');
    }
}
