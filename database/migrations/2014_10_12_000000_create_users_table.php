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
            $table->increments('user_id');
            $table->string('user_name')->nullable();
            $table->string('user_avatar')->nullable();
            $table->integer('user_sex')->default('0');
            $table->string('user_mobile')->nullable();
            $table->string('user_tel')->nullable();
            $table->string('user_fax')->nullable();
            $table->string('user_email')->nullable();
            $table->string('password')->nullable();
            $table->integer('user_type')->default('10');
            $table->integer('user_role')->default('10');
            $table->integer('user_status')->default('10');
            $table->integer('user_parent_id')->default('0');

            //微信
            $table->string('wechat_openid')->unique();
            $table->string('wechat_nickname')->nullable();
            $table->string('wechat_headimgurl')->nullable();

            $table->timestamps();
            $table->softDeletes();
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
