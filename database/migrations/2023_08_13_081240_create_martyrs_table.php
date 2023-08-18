<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMartyrsTable extends Migration
{
    public function up()
    {
        Schema::create('martyrs', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('date_of_birth');
            $table->string('hometowns');
            $table->string('rank');
            $table->string('unit');
            $table->string('position');
            $table->string('date_of_sacrifice');
            $table->foreignId('grave_location_id')->nullable()->constrained('grave_locations');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('martyrs');
    }
}
