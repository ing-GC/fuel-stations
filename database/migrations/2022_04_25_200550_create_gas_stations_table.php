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
        Schema::create('gas_stations', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('rfc');
            $table->string('razon_social');
            $table->timestamp('date_insert');
            $table->string('numero_permiso');
            $table->timestamp('fecha_aplicacion')->nullable();
            $table->string('permiso_id')->nullable();
            $table->string('longitude');
            $table->string('latitude');
            $table->string('codigo_postal');
            $table->string('calle');
            $table->string('colonia')->nullable();
            $table->string('municipio')->nullable();
            $table->string('regular');
            $table->string('premium');
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
        Schema::dropIfExists('gas_stations');
    }
};
