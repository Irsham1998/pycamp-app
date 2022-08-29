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
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            // metode lain
            // $table->unsignedBigInteger('camp_id);
            $table->bigInteger('camp_id')->unsigned();
            $table->string('name');
            $table->timestamps();

            // untuk relasi, pastikan tipe data dkknya sama
            // $table->foreignId('camp_id)->constrained();
            $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
};
