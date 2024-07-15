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
        Schema::create('useraddresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_address');
            $table->string('city');
            $table->integer('zip_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('useraddresses');
    }
};
