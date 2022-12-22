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
        Schema::create('scene_character', function (Blueprint $table) {
            $table->unsignedBigInteger('scene_id');
            $table->unsignedBigInteger('character_id');

            $table->foreign('scene_id')->references('id')->on('scenes')
                ->onDelete('cascade');
            $table->foreign('character_id')->references('id')->on('characters')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scene_character');
    }
};
