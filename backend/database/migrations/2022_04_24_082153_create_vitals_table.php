<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitals', function (Blueprint $table) {
            $table->id();
//            ユーザーID
            $table->foreignId('user_id')->constrained();
//            タイトル
            $table->string('title', 20);
//            備考
            $table->text('content')->nullable();
//            身長
            $table->double('height', 5, 1)->nullable();
//            体重
            $table->double('body_weight', 5, 1)->nullable();
//            心拍数
            $table->integer('heart_rate')->nullable();
//            最低血圧
            $table->integer('min_blood_pressure')->nullable();
//            最高血圧
            $table->integer('max_blood_pressure')->nullable();
//            登録日
            $table->dateTime('registered_at')->nullable(true);
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
        Schema::dropIfExists('vitals');
    }
}
