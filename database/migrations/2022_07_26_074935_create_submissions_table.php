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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->string('submission_id')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')->references('id')->on('article_types');
            $table->string('cover_letter')->nullable();
            $table->string('ms_file')->nullable();
            $table->string('akmnt')->nullable();
            $table->string('coi')->nullable();
            $table->longText('comment')->nullable();
            $table->longText('full_title')->nullable();
            $table->longText('short_title')->nullable();
            $table->longText('abstract')->nullable();
            $table->longText('keywords')->nullable();
            $table->longText('funding')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
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
        Schema::dropIfExists('submissions');
    }
};
