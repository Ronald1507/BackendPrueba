<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalleComunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calle_comuna', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_comuna');
            $table->unsignedBigInteger('id_calle');

            $table->foreign('id_comuna')->references('id')->on('comunas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_calle')->references('id')->on('calles')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('calle_comuna');
    }
}
