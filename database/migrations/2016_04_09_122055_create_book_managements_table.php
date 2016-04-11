<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_managements', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('book_name');
            $table->string('author');
            $table->string('interpreter')->nullable();
            $table->integer('year_publish');
            $table->integer('edition');
            $table->integer('isbn');
            $table->integer('book_id')->unique();
            $table->string('url')->nullable();
            $table->string('category_id')->unique();
            $table->string('title');
            $table->string('key_word')->nullable();
            $table->longText('book_review');
            $table->integer('cd_copy');
            $table->time('total_time');
            $table->string('book_status');
            $table->string('read_by');
            $table->string('comment')->nullable();
            $table->integer('publish_location');
            $table->foreign('publish_location')->references('GEO_ID')->on('geography');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('book_managements');
    }
}
