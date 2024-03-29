<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->foreignId('role_id');
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('spouse')->nullable();
            $table->string('nationality')->nullable();
            $table->string('occupation')->nullable();
            $table->string('religion')->nullable();
            $table->string('education')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('present_address')->nullable();
            $table->string('nid')->nullable();
            $table->string('birth_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('status')->default(true);
            $table->string('password');
            $table->date('birth_date')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('admins');
    }
}
