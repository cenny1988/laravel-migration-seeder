<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();

            $table->string('title', 60)->unique();
            $table->date('release');
            $table->bigInteger('views');
            $table->bigInteger('sells');
            $table->string('cover')->nullable();
            $table->string('label');
            $table->string('imei')->unique();
            $table->integer('price');
            $table->string('record_company');

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
        Schema::dropIfExists('albums');
    }
}
