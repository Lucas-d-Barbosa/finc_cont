<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReceita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitas', function (Blueprint $table) {
            $table->id();
            $table->string('receita', 40);
            $table->float('valor_receita', 10, 2);
            $table->unsignedBigInteger('tipo_receita_id');
            $table->unsignedBigInteger('user_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('tipo_receita_id')->references('id')->on('tipo_receitas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receitas', function (Blueprint $table) {
            $table->dropForeign('receitas_user_id_foreign');
            $table->dropForeign('receitas_tipo_receita_id_foreign');
        });
        Schema::dropIfExists('receita');
    }
}
