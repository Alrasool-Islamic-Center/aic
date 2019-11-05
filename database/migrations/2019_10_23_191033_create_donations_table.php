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
            $table->integer('contact_id');
            $table->integer('member_id')->nullable();
            $table->integer('donation_receiver_id');
            $table->integer('reciept_template_id');
            $table->integer('aic_notification_template_id');
            $table->string('project');
            $table->float('amount');
            $table->boolean('ec_notified')->default(false);
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
