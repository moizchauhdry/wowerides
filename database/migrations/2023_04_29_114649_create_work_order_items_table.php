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
        Schema::create('work_order_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('wo_id')->unsigned();
            $table->bigInteger('wo_item_category_id')->unsigned();
            $table->string('wo_item_name', 100)->nullable()->default('text');
            $table->string('wo_item_hours', 100)->nullable()->default('text');
            $table->string('wo_item_rate', 100)->nullable()->default('text');
            $table->string('wo_item_line_total', 100)->nullable()->default('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_order_items');
    }
};
