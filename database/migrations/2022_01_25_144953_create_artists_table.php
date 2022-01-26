<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();

            $table->string('name', 60);
            $table->string('lastname', 60);
            $table->string('stagename', 60)->nullable();
            $table->date('date_of_birth');
            $table->string('birth_city', 60);
            $table->string('genre', 60);
            $table->year('year');
            $table->string('email', 60)->unique();
            $table->string('phone', 20)->unique()->nullable();
            $table->string('web-site', 60)->unique()->nullable();
            $table->string('address');
            $table->text('bio')->nullable();
            $table->string('label', 60);

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
        Schema::dropIfExists('artists');
    }
}
