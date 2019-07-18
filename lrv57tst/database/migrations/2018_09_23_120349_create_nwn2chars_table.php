<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNwn2charsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nwn2chars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imgurl',255);
            $table->string('name',50);
            $table->string('gender',10);
            $table->string('race',50);
            $table->string('alignment',2);
            $table->string('startclass',50);
            $table->tinyInteger('lvlclass1');
            $table->string('class2',50);
            $table->tinyInteger('lvlclass2');
            $table->string('class3',50);
            $table->tinyInteger('lvlclass3');
            $table->string('class4',50);
            $table->tinyInteger('lvlclass4');
            $table->integer('lvltotal');
            $table->string('layer',50);
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
        Schema::dropIfExists('nwn2chars');
    }
}
