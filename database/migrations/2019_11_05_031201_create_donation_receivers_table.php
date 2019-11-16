<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\DonationReceiver;
class CreateDonationReceiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_receivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('email')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_ec_member');
            $table->softDeletesTz();
            $table->timestamps();
        });
        DonationReceiver::insert([
            [
                'first_name'    => 'Mohamed',
                'last_name'     => 'Alsoudani',
                'phone_number'  => '+12083160850',
                'email'         => 'mr.hassuny@gmail.com',
                'is_ec_member'  => true
            ],
            [
                'first_name'    => 'Test',
                'last_name'     => 'User',
                'phone_number'  => '+16086181996',
                'email'         => 'test@example.com',
                'is_ec_member'  => true
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donation_receivers');
    }
}
