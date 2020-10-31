<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('genre', 100);
            $table->text('ISBN');
            $table->string('title', 200);
            $table->string('writer', 200);
            $table->string('publisher', 150);
            $table->integer('year');
            $table->text('desc');
            $table->integer('stock');
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
        Schema::table('book_list', function (Blueprint $table) {
            //
        });
    }
}