<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
          $table->engine ='InnoDB';
          $table->charset='utf8';
          $table->collation ='utf8_unicode_ci';
          $table->increments('id');
          $table->string('name')->collation('utf8_unicode_ci');
          $table->string('email')->collation('utf8_unicode_ci')->unique();
          $table->string('password')->collation('utf8_unicode_ci');
          $table->unsignedInteger('store_id')->default(0);
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
        Schema::dropIfExists('merchants');
    }
}
