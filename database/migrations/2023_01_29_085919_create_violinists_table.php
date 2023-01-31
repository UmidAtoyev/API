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
        Schema::create('violinists', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('violinist_name');
            $table->string('violinist_nationality');
            $table->string('violinist_born');
            $table->string('violinist_died');
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
        Schema::dropIfExists('violinists');
    }
};
