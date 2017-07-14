<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmartPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('smartphones', function (Blueprint $table) {
          $table->increments('id')->unique();
          $table->string('modelname');
          $table->string('manufacturer');
          $table->string('barcode');
          $table->decimal('price');
          $table->timestamps();
      });
        //
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('smartphones');
    }
}
