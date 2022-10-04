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
        Schema::create('peut_ou_traites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_article')->constrained('articles');
            $table->foreignId('id_maladie')->constrained('maladies');
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
        Schema::dropIfExists('peut_ou_traites');

        Schema::table('peut_ou_traites', function(Blueprint $table){
            $table->dropForeign('id_article', 'id_maladie');
        });
    }
};
