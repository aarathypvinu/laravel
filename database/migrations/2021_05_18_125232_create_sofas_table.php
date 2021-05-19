<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSofasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sofas', function (Blueprint $table) {
            $table->id();
            $table->string("Model");
            $table->string("Description");
            $table->string("Material");
            $table->string("Dimension_inch");
            $table->string("Price");
            $table->string("Gallery");
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
        Schema::dropIfExists('sofas');
    }
}
