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
        Schema::create('casos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->timestamp('fecha_registro');
            $table->string('usuario_registra');
            $table->date('fecha_solucion')->nullable();
            $table->text('descripcion_caso');
            $table->string('usuario_asignado')->nullable();
            $table->enum('estado', ['sin asignar', 'asignado']);
            $table->enum('estado_caso', ['no iniciado', 'en proceso', 'completado', 'anulado']);
            $table->enum('tipo_urgencia', ['baja', 'media', 'alta']);
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
        Schema::dropIfExists('casos');
    }
};
