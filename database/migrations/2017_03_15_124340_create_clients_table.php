<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('client_id');
            $table->string('client_name')->nullable();
            $table->integer('client_sex')->default('0');
            $table->string('client_card')->nullable();
            $table->integer('client_card_type')->default('0');
            $table->string('client_mobile')->nullable();
            $table->integer('client_status')->default('0');
            $table->string('client_address')->nullable();
            $table->string('client_assign')->nullable();
            $table->integer('user_id')->default('0');
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
        Schema::dropIfExists('clients');
    }
}
