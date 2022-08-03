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
        Schema::create('pet', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->foreignId('pet_owner_id')->constrained('pet_owners')->onDelete('cascade')->onUpdate('cascade');
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('personality');
            $table->string('gender');
            $table->tinyInteger('age');
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
        Schema::dropIfExists('pet');
    }
};
