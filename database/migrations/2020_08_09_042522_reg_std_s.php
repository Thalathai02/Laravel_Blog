<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegStdS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_stds', function (Blueprint $table) {
            $table->id('id')->nullable();
            $table->string('std_code')->nullable();
            $table->string('name')->nullable();
            $table->string('nick_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('lineId')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('address')->nullable();
            $table->string('parent_name')->nullable();
            $table->string('parent_phone')->nullable();
            $table->string('user')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('reg_stds');
    }
}
