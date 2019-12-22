<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiles', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
          $table->integer('user_id')->nullable();
          $table->integer('idye')->nullable();
            $table->string('name');
            $table->string('price');
            $table->string('f1');
            $table->string('f2');
            $table->string('f3');
            $table->string('f4');
            $table->string('f5');
            $table->string('pic_url');
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
        Schema::dropIfExists('mobiles');
    }
}
