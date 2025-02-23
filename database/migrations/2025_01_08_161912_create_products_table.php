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
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('code', 100)->nullable();
            $table->string('quantity')->nullable();
            $table->string('tags')->nullable();
            $table->string('sizes')->nullable();
            $table->string('colors')->nullable();
            $table->string('selling_price')->nullable();
            $table->string('discount_price')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->json('gallery')->nullable();

            $table->string('hot_deals')->default(0);
            $table->string('featured')->default(0);
            $table->string('special_offer')->default(0);
            $table->string('special_deals')->default(0);
            $table->string('status')->default(0);

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')
                ->references('id')
                ->on('sub_categories')
                ->onDelete('cascade');
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
