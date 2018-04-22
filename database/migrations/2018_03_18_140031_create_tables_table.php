<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->increments('tableId');
            $table->unsignedInteger('res_id');
            $table->string('tableName');
            $table->integer('worker_id');
            $table->integer('user_id'); // in case the user have no phone
            $table->integer('seatNo');
            $table->boolean('isReserved');
            $table->timestamps();
            $table->foreign('res_id')->references('id')->on('restaurants')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
