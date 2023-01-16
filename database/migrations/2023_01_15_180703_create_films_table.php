<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id('id');
            $table->string('film', 191);
            $table->text('description');
            $table->date('release_date');
            $table->enum('rating', ['1','2','3','4','5']);
            $table->decimal('ticket_price');
            $table->integer('country');
            $table->string('photo', 191);
            $table->string('slug', 191)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('films');
    }
}
