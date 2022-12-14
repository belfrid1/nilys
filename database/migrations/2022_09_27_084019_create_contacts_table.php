<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('email');
            $table->json('domain')->default(new \Illuminate\Database\Query\Expression('(JSON_ARRAY())'));
            $table->json('url')->default(new \Illuminate\Database\Query\Expression('(JSON_ARRAY())'));
            $table->boolean('status')->default(false);
            $table->string('popup_guid');
            $table->string('popupgroup_guid');
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
        Schema::dropIfExists('contacts');
    }
}
