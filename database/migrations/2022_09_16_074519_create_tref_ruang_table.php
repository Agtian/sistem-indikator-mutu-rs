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
        Schema::create('TREF_RUANG', function (Blueprint $table) {
            $table->id('ID');
            $table->string('NAMA_RUANG');
            $table->timestamps('TGL_SYSTEM');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TREF_RUANG');
    }
};
