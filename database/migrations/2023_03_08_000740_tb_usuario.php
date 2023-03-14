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
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->Bigincrements("id")->primarykey();
            $table->integer("clave");
            $table->string("nombre",120);
            $table->string("app",120);
            $table->string("apm",120);
            $table->date("fn");
            $table->string("gn",10);
            $table->string("imagen");
            $table->string("email");
            $table->string("password",30);
            $table->unsignedBigInteger("tipousua_id");
            $table->foreign("tipousua_id")->references("id")->on("tb_tipo_usuarios");
            $table->boolean("activo")->default(true);
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
        Schema::dropIfExists('tb_usuarios');
    }
};
