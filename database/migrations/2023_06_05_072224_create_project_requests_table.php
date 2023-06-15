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
        Schema::create('project_requests', function (Blueprint $table) {
            $table->id();
            $table->string('client');
            $table->string('email');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('language');
            $table->text('brief')->nullable()->default(null);
            $table->string('nationalities');
            $table->integer('daily_rate');
            $table->integer('days');
            $table->boolean('has_cvs')->default(false);
            $table->boolean('has_outlines')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_requests');
    }
};
