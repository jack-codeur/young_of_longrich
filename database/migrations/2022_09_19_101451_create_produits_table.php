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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_typeArticle')->constrained('type_articles');
            $table->string('nom_produit');
            $table->string('maladie');
            $table->string('image_produit');
            $table->string('prix_promo');
            $table->string('prix_reel');
            $table->text('description_produit');
            $table->text('mode_utilisation');
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
        Schema::dropIfExists('produits');

        Schema::table('produits', function(Blueprint $table){
            $table->dropForeign('id_typeArticle');
        });
    }
};
