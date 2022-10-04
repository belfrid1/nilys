<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopupGroupConditions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popup_group_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->unsignedBigInteger('popup_id');
            $table->foreign('popup_id')->references('id')->on('popups');

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
        Schema::dropIfExists('popup_group_conditions');
    }
}
