<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{

    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();

            $table->string('email');
            $table->text('texto')->nullable();
            $table->dateTimeTz('fecha')->nullable();
            $table->boolean('visible')->nullable()->default(false);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
