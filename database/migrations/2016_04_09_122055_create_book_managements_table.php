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
            $table->increments('id');
            $table->timestamps();
            $table->string('book_name');
            $table->string('author');
            $table->string('interpreter');
            $table->date('year_publish');
            $table->integer('edition');
            $table->integer('isbn');
            $table->integer('book_id');
            $table->string('url');
            $table->string('category_id');
            $table->string('title');
            $table->string('key_word');
            $table->longText('book_review');
            $table->integer('cd_copy');
            $table->time('total_time');
            $table->string('book_status');
            $table->string('read_by');
            $table->string('comment');
            $table->integer('publish_location')->unsigned();
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
