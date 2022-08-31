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
        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('materiel_id');
            $table->foreign('materiel_id')->references('id')->on('materiel')-> onDelete('cascade')-> onUpdate('cascade');

            $table->unsignedBigInteger('entree_id');
            $table->foreign('entree_id')->references('id')->on('entree')-> onDelete('cascade')-> onUpdate('cascade');

            $table->unsignedBigInteger('affectation_id');
            $table->foreign('affectation_id')->references('id')->on('affectation')-> onDelete('cascade')-> onUpdate('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user')-> onDelete('cascade')-> onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operations');
    }
};
