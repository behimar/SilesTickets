<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->engine = "InnoDB";
            
            $table->increments('id');
            $table->float('monto');
            $table->integer('location_id')->unsigned();
            $table->timestamps();

            /** relacion con tabla locations*/
            $table->foreign('location_id')
                ->references('id')->on('locations')
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
        Schema::drop('prices');
    }
}
