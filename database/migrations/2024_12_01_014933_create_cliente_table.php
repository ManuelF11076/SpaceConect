<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre');
            $table->string('direccion_IP');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('direcciones_id')->index('fk_cliente_direcciones_idx');
            $table->unsignedInteger('pagos_id')->index('fk_cliente_pagos1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
