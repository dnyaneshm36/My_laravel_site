<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name',50);
            $table->date('dob');
            $table->bigInteger('phone');
            $table->string('address',255);
            $table->string('photo')->default('user.jpg');
            $table->string('devnagri');
            $table->string('email',250)->unique();
            $table->string('password');
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
        
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('dob');
              $table->dropColumn('phone');
                $table->dropColumn('address');
                  $table->dropColumn('photo');
                      $table->dropColumn('devnagri');
                  });

        Schema::dropIfExists('users');
           
    }
}
