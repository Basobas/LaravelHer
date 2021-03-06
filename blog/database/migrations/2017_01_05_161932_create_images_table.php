<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('images', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id');
                $table->string('name');
                $table->string('author');
                $table->string('details');
                $table->string('image_url');
                $table->integer('likes');
                $table->string('category');
                $table->integer('active')->default(1);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('images');
    }
}
