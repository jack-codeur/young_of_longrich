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
            $table->string('nom_article');
            $table->string('roleOuSerie');
            $table->foreignId('id_typeArticle')->constrained('type_articles');
            $table->string('img1_article');
            $table->string('img2_article');
            $table->string('img3_article');
            $table->string('img4_article');
            $table->string('prix_promo');
            $table->string('prix_article');
            $table->text('description_article');
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
        Schema::dropIfExists('articles');

        Schema::table('articles', function(Blueprint $table){
            $table->dropForeign('id_typeArticle');
        });
    }
};
