<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingEmails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_emails', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->text('content');
            $table->string('apikey');
            $table->string('secretkey');
            $table->string('host');
            $table->integer('port');
            $table->string('username');
            $table->string('password');
            $table->string('encryption')->default('tls');
            $table->string('from_address');
            $table->string('mailler')->default('smtp');
            \App\Models\PopupGroup::addSlugColumn($table);
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
        Schema::dropIfExists('setting_emails');
    }
}
