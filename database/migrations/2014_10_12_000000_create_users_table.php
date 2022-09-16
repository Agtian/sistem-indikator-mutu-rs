<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TM_USER', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ID_RUANG');
            $table->bigInteger('ID_RUANG_SUB');
            $table->string('NAMA');
            $table->bigInteger('I_AKSES');
            $table->string('USERNAME');
            $table->string('PASSWORD');
            $table->string('EMAIL')->unique();
            $table->timestamp('EMAIL_VERIFIED_AT')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TM_USER');
    }
};
