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
            $table->string('wo_bike_brand', 100);
            $table->string('wo_bike_model', 100);
            $table->date('wo_date');
            $table->date('wo_return_date');
            $table->date('wo_completed_date');
            $table->float('wo_total_amount')->default(0);
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
