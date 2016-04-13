<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Province extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(file_get_contents('app/sql/province.sql'));
        DB::statement('ALTER TABLE geography engine=InnoDB');
        DB::statement('ALTER TABLE province engine=InnoDB');
        DB::statement('ALTER TABLE amphur engine=InnoDB');
        DB::statement('ALTER TABLE district engine=InnoDB');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('amphur');
        Schema::drop('district');
        Schema::drop('geography');
        Schema::drop('province');
    }
}
