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
            $table->string('code_product')->unique();
            $table->string('name');
            $table->string('slug');
            $table->string('image_primary')->nullable();
            $table->json('image_secondary')->nullable();
            $table->integer('price');
            $table->text('short_description')->nullable();
            $table->text('detail_description')->nullable();
            $table->integer('sale_off')->nullable();
            $table->integer('status')->default(1);
            $table->integer('featured')->default(1);
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
