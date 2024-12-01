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
        Schema::table('clientes', function (Blueprint $table) {
            $table->foreign(['direcciones_id'], 'fk_cliente_direcciones')->references(['id'])->on('direcciones')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['pagos_id'], 'fk_cliente_pagos1')->references(['id'])->on('pagos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropForeign('fk_cliente_direcciones');
            $table->dropForeign('fk_cliente_pagos1');
        });
    }
};
