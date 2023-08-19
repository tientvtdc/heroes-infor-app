<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraveLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('grave_locations', function (Blueprint $table) {
            $table->id();
            $table->string('grave_number');
            $table->string('grave_row');
            $table->string('grave_lot');
            $table->string('grave_area');
            $table->text('other_info')->nullable();
            $table->string('grave_type');
            $table->boolean('has_remains');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grave_locations');
    }
}
