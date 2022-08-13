<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
             $table->string('last_name')->nullable();
              $table->string('username')->nullable();
                 $table->string('phone_no')->nullable();
            $table->string('email')->unique();
               $table->string('password');


                  $table->string('street_address')->nullable();
                     $table->unsignedinteger('division_id')->comment('Division Table ID')->nullable();
                     $table->unsignedinteger('district_id')->comment('District Table ID')->nullable();






                          $table->unsignedInteger('status')->default(0)->comment('0=Inactive|1=Active|2=Ban');
                          $table->string('ip_address')->nullable();
                          $table->string('avatar')->nullable();
                             $table->string('shipping_address')->nullable();














            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
