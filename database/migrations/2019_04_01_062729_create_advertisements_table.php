<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->string('link');
            $table->bigInteger('rank');
            $table->string('image')->nullable();
            $table->boolean('status')->default(0);
            $table->string('created_by');
            $table->string('modified_by')->nullable();
            $table->timestamps();

            $table->foreign('created_by')->references('username')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('modified_by')->references('username')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisements');
    }
}
