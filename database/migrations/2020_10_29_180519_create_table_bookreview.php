<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBookreview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_rev', function (Blueprint $table) {
            $table->string('title', 200);
            $table->text('bookreview');
            $table->timestamps();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_rev', function (Blueprint $table) {
            //
        });
    }
}
