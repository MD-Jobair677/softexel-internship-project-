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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            $table->string('product_name');
            $table->string('slug');
            $table->string('product_image');
            $table->integer('product_price');
            $table->foreignId('categorie_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('subcategorie_id')->constrained()->onUpdate('cascade')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
