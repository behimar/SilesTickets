<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //tiene que usar innoDB para que se puedan hacer relaciones
            
            $table->increments('id');
            $table->integer('carnet');
            $table->string('nombre',100);
            $table->string('apP',60);
            $table->string('apM',60)->nullable();
            $table->integer('telefono');
            $table->date('fechaNac');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('user_id')
                    ->references('id')->on('users')
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
        Schema::drop('profiles');
    }
}
