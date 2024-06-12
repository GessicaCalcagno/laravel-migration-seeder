<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * CREATE TABLE trains (
    * 'id' BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    * 'data_di_partenza' DATE NOT NULL,
    * 'azienda' VARCHAR(255),
    * 'orario_di_partenza' TIME,
    * 'orario_di_arrivo' TIME,
    * 'codice_treno' VARCHAR(255),
    * 'numero_carrozze' INT,
    * 'in_orario' BOOLEAN DEFAULT TRUE,
    * 'cancellato' BOOLEAN DEFAULT FALSE,
    * 'created_at' TIMESTAMP NULL,
    * 'updated_at' TIMESTAMP NULL
    * );
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');
            $table->date('data_di_partenza');
            $table->string('stazione_di_partenza');
            $table->string('stazione_di_arrivo');
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('codice_treno');
            $table->integer('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};