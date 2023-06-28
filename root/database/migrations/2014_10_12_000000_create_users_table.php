<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->comment('ID');
            $table->char('last_name')->comment('名字');
            $table->char('first_name', 100)->comment('名前');
            $table->char('last_name_kana')->comment('名字（ふりがな）');
            $table->char('first_name_kana')->comment('名前（ふりがな）');
            $table->bigInteger('role_id', 11)->comment('権限');
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
            $table->
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
};
