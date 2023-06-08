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
        Schema::create('work_orders', function (Blueprint $table) {
            $table->id();
            $table->string('wo_title', 100);
            $table->string('wo_customer_name', 100);
            $table->string('wo_bike_category', 100);
            $table->string('wo_bike_model', 100);
            $table->string('wo_bike_color', 100);
            $table->string('wo_bike_warranty', 100);
            $table->date('wo_return_date');
            $table->float('wo_subtotal')->default(0);
            $table->float('wo_discount')->default(0);
            $table->float('wo_tax_rate')->default(0);
            $table->float('wo_tax_total')->default(0);
            $table->float('wo_grand_total')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_orders');
    }
};
