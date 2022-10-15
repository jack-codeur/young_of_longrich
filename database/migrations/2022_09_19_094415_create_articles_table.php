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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_typeArticle')->constrained('type_articles');
            $table->string('model_article');
            $table->string('image_article');
            $table->string('prix_promo');
            $table->string('prix_reel');
            $table->text('caracteristique');
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
        Schema::dropIfExists('articles');

        Schema::table('articles', function(Blueprint $table){
            $table->dropForeign('id_typeArticle');
        });
    }
};
