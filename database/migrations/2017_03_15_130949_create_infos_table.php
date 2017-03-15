<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('info_id');
            $table->string('info_quota')->nullable();
            $table->integer('info_unit')->default('0');
            $table->string('info_remark')->nullable();
            $table->integer('info_notice')->default('0');
            $table->string('info_source')->nullable();
            $table->integer('client_id')->default('0');

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
        Schema::dropIfExists('infos');
    }
}
