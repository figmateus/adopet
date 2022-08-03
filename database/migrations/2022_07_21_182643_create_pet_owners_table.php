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
        Schema::create('pet_owners', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone', 15);
            $table->string('cpf-cnpj');
            $table->string('cep', 8);
            $table->string('password');
            $table->string('street');
            $table->string('neighbor');
            $table->string('number');
            $table->string('city');
            $table->string('state');
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
        Schema::dropIfExists('pet_owner');
    }
};
