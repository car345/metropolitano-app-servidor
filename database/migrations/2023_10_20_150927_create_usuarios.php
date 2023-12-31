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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('numero_documento', 100)->nullable();
            $table->string('nombre', 100)->nullable();
            $table->string('correo', 50)->nullable();
            $table->string('telefono', 50)->nullable();
            $table->string('password',255)->nullable();
            $table->foreignId('tipo')->nullable()->references('id')->on('roles')->onDelete('restrict');
            $table->char('activo', 1)->default('S')->comment("S=si, N=no");
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
        Schema::dropIfExists('usuarios');
    }
};
