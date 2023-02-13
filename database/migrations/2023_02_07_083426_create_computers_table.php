<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // ? Run the migrations.
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('origin');
            $table->float('price');
            $table->timestamps();
        });
    }

    // ? Reverse the migrations.
    public function down()
    {
        Schema::dropIfExists('computers');
    }
};