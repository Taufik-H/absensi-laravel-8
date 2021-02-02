<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->unique();
            $table->string('nama');
            $table->string('no_hp')->nullable();
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->string('foto')->nullable();
            $table->timestamps();
          $table->foreignId('kelas_id')
      ->constrained('kelas')
      ->onUpdate('cascade')
      ->onDelete('cascade');
      $table->foreignId('jurusan_id')
      ->constrained('jurusans')
      ->onUpdate('cascade')
      ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
