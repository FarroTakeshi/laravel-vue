<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkUserIdToSellingPointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tur_selling_point', function (Blueprint $table) {
            $table->foreign('UsuarioIDCreacion')
                ->references('id')
                ->on('users')
                ->onDelete('set null')
                ->onUpdate('set null');

            $table->foreign('UsuarioIDModificacion')
                ->references('id')
                ->on('users')
                ->onDelete('set null')
                ->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tur_selling_point', function (Blueprint $table) {
            $table->dropForeign('tur_selling_point_UsuarioIDCreacion_foreign');
        });

        Schema::table('tur_selling_point', function (Blueprint $table) {
            $table->dropForeign('tur_selling_point_UsuarioIDModificacion_foreign');
        });
    }
}
