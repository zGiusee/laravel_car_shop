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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->float('price', 11, 2);
            $table->string('model', 50);
            $table->float('km', 11, 2)->nullable();
            $table->string('img')->nullable();
            $table->year('immatricolation_year')->nullable();
            $table->string('plate', 7)->unique()->nullable();
            $table->year('year');
            $table->string('color', 50);
            $table->string('fuel_type', 50);
            $table->boolean('used');
            $table->text('description')->nullable();
            $table->tinyInteger('seats');
            $table->string('transmission', 30);
            $table->tinyInteger('owners')->nullable();
            $table->bigInteger('engine_size');
            $table->string('power', 70);
            $table->string('paint_type', 50)->nullable();
            $table->string('material_type', 50)->nullable();
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
        Schema::dropIfExists('cars');
    }
};
