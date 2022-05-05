<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('train_company', 30);
            $table->string('train_code', 6);
            $table->string('departure_railway', 50);
            $table->string('destination_railway', 50);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->tinyInteger('n_couches')->nullable();
            $table->boolean('on_time');
            $table->boolean('deleted');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
