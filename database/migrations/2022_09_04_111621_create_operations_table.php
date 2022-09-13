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
            $table->integer('quantite');
            $table->string('typeOperation')->nulable();
            $table->timestamps();

            $table->unsignedBigInteger('materiel_id');
            $table->foreign('materiel_id')->references('id')->on('materiels')-> onDelete('cascade')-> onUpdate('cascade');

            $table->unsignedBigInteger('entree_id')->nullable();
            $table->foreign('entree_id')->references('id')->on('entrees')-> onDelete('cascade')-> onUpdate('cascade');

            $table->unsignedBigInteger('affectation_id')->nullable();
            $table->foreign('affectation_id')->references('id')->on('affectations')-> onDelete('cascade')-> onUpdate('cascade');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')-> onDelete('cascade')-> onUpdate('cascade');
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
