<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('category')->unsigned();
            $table->string('title')->unique();
            $table->longText('short_description');
            $table->longText('description')->nullable();
            $table->string('feature_image')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('slider_key')->default(0);
            $table->boolean('feature_key')->default(0);
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
        Schema::dropIfExists('news');
    }
}
