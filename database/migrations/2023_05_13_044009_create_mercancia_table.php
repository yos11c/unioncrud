<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMercanciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mercancia', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',21);



            $table->unsignedBigInteger('mercancia_id')->nullable();
            $table->foreign('mercancia_id')
                ->references('id')
                ->on('tipomercancia')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('mercancias');
    }
}
