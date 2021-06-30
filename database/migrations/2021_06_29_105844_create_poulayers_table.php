<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoulayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poulayers', function (Blueprint $table) {
            $table->id();

            $table->date('dateReproduction');

            $table->foreignId('lot_id')->constrained('lots');

            $table->integer('mortalite_male')->nullable();

            $table->integer('mortalite_femelle')->nullable();

            $table->integer('mortalite_totale')->nullable();

            $table->integer('ponte_totale')->nullable();

            $table->string('mous')->nullable();

            $table->string('casses')->nullable();

            $table->string('feles')->nullable();

            $table->string('rugueux')->nullable();

            $table->string('gros')->nullable();

            $table->string('petits')->nullable();

            $table->string('difformes')->nullable();

            $table->string('couleur')->nullable();

            $table->string('gel')->nullable();

            $table->text('evenement')->nullable();

            $table->softDeletes();

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
        Schema::dropIfExists('poulayers');
    }
}
