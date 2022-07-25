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
            $table->unsignedBigInteger('article_type')->nullable();
            $table->foreign('article_type')
                ->references('id')
                ->on('article_types');
            $table->string('cover_letter')->nullable();
            $table->string('ms_file')->nullable();
            $table->string('acknowledgement')->nullable();
            $table->string('conflict_of_interest')->nullable();
            $table->longText('comment')->nullable();
            $table->unsignedTinyInteger('status')->default(1)->comment('1=>Drafted,2=>Submitted');
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
