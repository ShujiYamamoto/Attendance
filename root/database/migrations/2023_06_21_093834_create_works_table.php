<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Work;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement()->comment('ID');
            $table->bigInteger('user_id')->unique()->comment('ユーザーID');
            $table->char('work_content', 255)->comment('業務内容');
            $table->char('comment', 255)->nullable()->comment('総務コメント');
            $table->date('date')->unique()->comment('日付');
            $table->time('work_start_time')->useCurrent()->comment('出勤時間');
            $table->time('work_end_time')->useCurrent()->comment('退勤時間');
            $table->time('break_time')->nullable()->default('01:00')->comment('休憩時間');
            $table->integer('status_id')->comment('ステータス');
            $table->timestamp('created_at')->comment('作成日時');
            $table->timestamp('updated_at')->comment('更新日時');
            $table->timestamp('deleted_at')->comment('論理削除');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
};
