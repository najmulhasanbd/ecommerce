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
            $table->json('qty')->nullable();
            $table->string('supplier')->nullable();

            $table->json('tags')->nullable();
            $table->json('size')->nullable();
            $table->json('color')->nullable();
            $table->string('unit')->nullable();
            $table->json('sku')->nullable();
            $table->json('attributes')->nullable();

            $table->decimal('selling_price', 10, 2)->nullable();
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->decimal('buying_price', 10, 2)->nullable();
            $table->integer('stock_quantity')->nullable();
            $table->integer('alert_quantity')->nullable();

            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->json('gallery')->nullable();

            $table->tinyInteger('hot_deals')->default(0);
            $table->tinyInteger('featured')->default(0);
            $table->tinyInteger('special_offer')->default(0);
            $table->tinyInteger('special_deals')->default(0);
            $table->tinyInteger('status')->default(0);

            $table->string('meta_keywords')->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();

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
