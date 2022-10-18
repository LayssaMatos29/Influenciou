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
        Schema::table('cursos', function (Blueprint $table) {
            $table->string('titulo', 60);
            $table->string('sub_titulo', 120);
            $table->foreignId('idioma_id')->constrained('idiomas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->dropcolumn('nome');
            $table->dropcolumn('titulo');
            $table->dropcolumn('sub_titulo');
            $table->dropcolumn('idioma_id');
        });
    }
};
