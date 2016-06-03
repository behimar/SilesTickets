<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->engine = "InnoDB";
            
            $table->increments('id');
            $table->enum('localidad',['Curva Norte', 'Curva Sur', 'General', 'Preferencia', 'Butacas', 'Palco']);
            $table->integer('cantidad');
            $table->integer('precio');
            $table->integer('event_id')->unsigned();
            $table->timestamps();
            /** relacion con tabla events*/
            $table->foreign('event_id')
                ->references('id')->on('events')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('locations');
    }
}
