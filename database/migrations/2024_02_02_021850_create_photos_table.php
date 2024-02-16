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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->text('photo_title');
            $table->text('photo_description');
            $table->string('file_location');
            $table->foreignId('album_id')->references('id')->on('albums')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status_active', [0 , 1, 2])->default(0);
            $table->enum('allow_comments', [0 , 1 ])->default(1);
            $table->uuid('uuid')->unique;
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
        Schema::dropIfExists('photos');
    }
};
