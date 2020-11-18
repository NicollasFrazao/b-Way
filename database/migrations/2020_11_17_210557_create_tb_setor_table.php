<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSetorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create
        (
            'tb_setor', 
            function (Blueprint $table) 
            {
                $table -> increments('cd_setor') -> index();

                $table -> string('nm_setor', 100) -> index() -> nullable();
                $table -> integer('vl_x') -> unsigned();
                $table -> integer('vl_y') -> unsigned();
                $table -> integer('vl_largura') -> unsigned();
                $table -> integer('vl_comprimento') -> unsigned();

                $table -> integer('cd_estabelecimento') -> unsigned();

                $table -> timestamps();

                $table -> foreign('cd_estabelecimento') 
                    -> references('cd_estabelecimento') 
                        -> on('tb_estabelecimento')
                    -> constrained()
                    -> onDelete('cascade') 
                    -> onUpdate('cascade');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_setor');
    }
}