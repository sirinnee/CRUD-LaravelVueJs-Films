<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('films', function (Blueprint $table) {
        $table->id();
        $table->string('titre');
        $table->string('realisateur');
        $table->string('pays');
        $table->date('date_sortie');
        $table->string('description');
        $table->string('poster');
        $table->string('duree');
        $table->text('langue');
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
        Schema::dropIfExists('films');
    }
}
