<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cus_id');
            $table->unsignedBigInteger('ser_id');
            $table->dateTime('tanggal');
            $table->timestamps();
            $table->foreign('cus_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('ser_id')->references('id')->on('servis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
