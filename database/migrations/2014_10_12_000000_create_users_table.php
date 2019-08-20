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
            $table->bigIncrements('id');
            $table->string('surname');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->text('state_of_origin')->nullable();
            $table->text('school_attended')->nullable();
            $table->text('course_studied')->nullable();
            $table->text('post_held')->default('NONE');
            $table->text('quote')->nullable();
            $table->text('facebook_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('hobbies')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->default(0);
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
