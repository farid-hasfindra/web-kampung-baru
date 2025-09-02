<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('perangkats', function (Blueprint $table) {
            // Drop old columns
            $table->dropColumn(['mulai_kerja', 'deskripsi', 'facebook', 'instagram', 'twitter', 'linkedin']);
            // Add new columns
            $table->string('tempat_tanggal_lahir')->nullable();
            $table->text('histori_pendidikan')->nullable();
            $table->string('hobi')->nullable();
            $table->text('akun_sosmed')->nullable();
        });
    }

    public function down()
    {
        Schema::table('perangkats', function (Blueprint $table) {
            // Restore old columns
            $table->date('mulai_kerja')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            // Drop new columns
            $table->dropColumn(['tempat_tanggal_lahir', 'histori_pendidikan', 'hobi', 'akun_sosmed']);
        });
    }
};
