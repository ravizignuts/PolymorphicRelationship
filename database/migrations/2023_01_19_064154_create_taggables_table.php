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
        Schema::create('taggables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags');
            //second method to define foreign key
            //$table->foreignId('tag_id')->constrained('tags','id');
            //when the row is deleted, it will delete all it's references and attached data too onDelete() Method
            //$table->foreignId('tag_id')->constrained('tags','id')->onDelete('casecade');
            $table->morphs('taggable');
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
        Schema::dropIfExists('taggables');
    }
};
