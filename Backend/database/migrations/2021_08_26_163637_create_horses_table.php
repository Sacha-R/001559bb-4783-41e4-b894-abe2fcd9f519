<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('horse_nom')->nullable();
            $table->string('horse_sire')->nullable();
            $table->string('horse_cle')->nullable();
            $table->string('horse_race')->nullable();
            $table->string('horse_robe')->nullable();
            $table->string('horse_sexe')->nullable();
            $table->string('horse_country')->nullable();
            $table->string('horse_taille')->nullable();
            $table->string('horse_datenaissance')->nullable();
            $table->string('horse_pere')->nullable();
            $table->string('horse_mere')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horses');
    }
}
