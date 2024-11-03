<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('google_tracking', function (Blueprint $table) {
            $table->id();
            $table->string('campaign_name')->nullable();
            $table->string('conversion_id')->nullable(); // Thêm nullable()
            $table->string('conversion_label')->nullable();
            $table->text('tracking_code')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('google_tracking');
    }
};
