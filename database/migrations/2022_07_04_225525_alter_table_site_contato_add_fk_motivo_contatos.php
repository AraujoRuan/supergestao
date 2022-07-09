<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         //adicionando a coluna motivo_contato
         Schema::table('site_contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contatos_id');
        });

        //atribuindo motivo_contato para nova coluna 
        DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');

        //criando fk e removendo a coluna motivo_contato
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //criando a coluna motivo_contato e removendo a fk
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->integer('motivo_contato');
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
        });

        //atribuindo motivo_contato_id para nova coluna motivo_contato
        DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');

         //removendo a coluna motivo_contato_id
         Schema::table('site_contatos', function (Blueprint $table) {
            $table->dropColumn('motivo_contato');
        });
    }
};
