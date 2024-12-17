<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('geolocations', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->decimal('distance', 8, 2)->nullable(); // Distância em km
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('geolocations');
    }
};
