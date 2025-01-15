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
            $table->integer('supplier_id')->nullable();
            $table->integer('unit_id')->nullable();

            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('code', 100)->nullable();
            $table->json('tags')->nullable();
            $table->string('sku')->nullable();

            $table->string('selling_price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('buying_price')->nullable();
            $table->string('alert_quantity')->nullable();
            $table->string('stock_quantity')->nullable();

            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();

            $table->string('thumbnail')->nullable();
            $table->json('gallery')->nullable();

            $table->string('hot_deals')->default(0);
            $table->string('featured')->default(0);
            $table->string('special_offer')->default(0);
            $table->string('special_deals')->default(0);
            $table->string('status')->default(0);

            $table->string('meta_keywords')->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')
                ->references('id')
                ->on('sub_categories')
                ->onDelete('cascade');

            // $table->id();
            // $table->unsignedBigInteger('category_id')->nullable();
            // $table->unsignedBigInteger('subcategory_id')->nullable();
            // $table->integer('brand_id')->nullable();

            // $table->string('name')->nullable();
            // $table->string('slug')->nullable();
            // $table->string('code', 100)->nullable();
            // $table->string('supplier_id')->nullable();

            // $table->json('tags')->nullable();
            // $table->string('unit')->nullable();
            // $table->json('sku')->nullable();
            // $table->json('attributes')->nullable();

            // $table->json('selling_price')->nullable();
            // $table->json('discount_price')->nullable();
            // $table->json('buying_price')->nullable();
            // $table->json('stock_quantity')->nullable();
            // $table->json('alert_quantity')->nullable();

            // $table->text('short_description')->nullable();
            // $table->longText('long_description')->nullable();
            // $table->json('thumbnail')->nullable();
            // $table->json('gallery')->nullable();

            // $table->tinyInteger('hot_deals')->default(0);
            // $table->tinyInteger('featured')->default(0);
            // $table->tinyInteger('special_offer')->default(0);
            // $table->tinyInteger('special_deals')->default(0);
            // $table->tinyInteger('status')->default(0);

            // $table->string('meta_keywords')->nullable();
            // $table->string('meta_title')->nullable();
            // $table->longText('meta_description')->nullable();

            // $table->timestamps();

            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            // $table->foreign('subcategory_id')
            //     ->references('id')
            //     ->on('sub_categories')
            //     ->onDelete('cascade');
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
