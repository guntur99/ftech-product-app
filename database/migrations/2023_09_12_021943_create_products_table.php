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
            $table->string('name');
            $table->integer('shop_id');
            $table->string('price');
            $table->bigInteger('stock');
            $table->longText('description')->nullable();
            $table->longText('information')->nullable();
            $table->integer('origin_id');
            $table->integer('species_id');
            $table->integer('roast_level_id');
            $table->integer('tasted_id');
            $table->integer('processing_id');
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
