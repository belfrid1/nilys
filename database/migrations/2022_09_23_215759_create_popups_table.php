<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popups', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email_subject');
            $table->string('email_content');
            $table->text('popup_content');
            $table->boolean('enable');
            $table->boolean('default');
            $table->unsignedBigInteger('popupgroup_id');
            $table->foreign('popupgroup_id')->references('id')->on('popup_groups');
            \App\Models\Popup::addSlugColumn($table);

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
        Schema::dropIfExists('popups');
    }
}
