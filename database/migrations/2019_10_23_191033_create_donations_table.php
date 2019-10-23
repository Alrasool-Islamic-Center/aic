<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('member_id')->nullable();
            $table->integer('receiver_id');
            $table->integer('reciept_template_id');
            $table->integer('phone_id');
            $table->integer('aic_notification_template_id');
            $table->string('campaign');
            $table->boolean('aic_notified')->default(false);
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
