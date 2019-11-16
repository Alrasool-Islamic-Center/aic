<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\ECMember;

class CreateECMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_c_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('email');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
        ECMember::insert([
            [
                'first_name'    => 'Mohamed',
                'last_name'     => 'Alsoudani',
                'phone_number'  => '+12083160850',
                'email'         => 'mr.hassuny@gmail.com',
                'is_active'     => true
            ],
            [
                'first_name'    => 'Test',
                'last_name'     => 'User',
                'phone_number'  => '+16086181996',
                'email'         => 'mr.hassuny@gmail.com',
                'is_active'     => true
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
        Schema::dropIfExists('e_c_members');
    }
}
