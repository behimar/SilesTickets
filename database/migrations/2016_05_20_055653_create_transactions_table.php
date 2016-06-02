<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->engine = "InnoDB";
            
            $table->increments('id');
            $table->integer('cantidad');
            $table->integer('reservation_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->timestamps();

            /** relacion con tabla reservations*/
            $table->foreign('reservation_id')
                ->references('id')->on('reservations')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::drop('transactions');
    }
}
