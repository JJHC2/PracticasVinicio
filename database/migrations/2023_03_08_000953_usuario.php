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
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements("id")->primarykey();
            $table->integer("matricula");
            $table->string("nombre",60);
            $table->string("app",40);
            $table->date("fn");
            $table->string("gen");
            $table->unsignedBigInteger("id_estado");
            $table->foreign("id_estado")->references("id_estado")->on("estados");
            $table->unsignedBigInteger("id_municipio");
            $table->foreign("id_municipio")->references("id_municipio")->on("municipios");
            $table->string("direccion",50);
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
        Schema::dropIfExists('usuario');
    }
};
