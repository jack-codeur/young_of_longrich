<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->integer('quantite');
            $table->string('nom');
            $table->integer('prix');
            $table->integer('total');
            $table->foreignId('id_statusCommande')->constrained('status_commandes');
            // $table->foreignId('id_user')->constrained('users');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');

        Schema::table('commandes', function(Blueprint $table){
            $table->dropForeign('id_produit', 'id_statusCommande', 'id_user', 'id_client');
        });
    }
};
