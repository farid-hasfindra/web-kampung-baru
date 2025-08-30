<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('darurats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instansi');
            $table->string('kontak');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('darurats');
    }
};
