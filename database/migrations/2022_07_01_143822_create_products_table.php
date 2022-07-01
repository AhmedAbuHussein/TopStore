<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->text('title')->nullable();
            $table->string('code')->nullable();
            $table->text('color')->nullable();
            $table->string('video_url')->nullable();
            $table->text('description')->nullable();
            $table->longText('details')->nullable();
            $table->boolean('is_active')->default(false);
            $table->boolean('is_hot_deals')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_special_offer')->default(false);
            $table->boolean('is_special_deal')->default(false);
            
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
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
        Schema::dropIfExists('products');
    }
}
