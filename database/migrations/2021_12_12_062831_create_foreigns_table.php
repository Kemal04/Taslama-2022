<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foreigns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->string('name');
            $table->text('title');
            $table->string('img');
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
        Schema::dropIfExists('foreigns');
    }
}
