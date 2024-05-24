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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 15)->nullable();
            $table->string('stazione_partenza', 40);
            $table->string('stazione_arrivo', 40);
            $table->char('orario_partenza', 5);
            $table->char('orario_arrivo', 5)->nullable();
            $table->char('codice_treno', 6);
            $table->tinyInteger('num_carrozze')->unsigned()->nullable();
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
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
