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
        Schema::create('project_requests_form', function (Blueprint $table) {
            $table->id();
            $table->string('input');
            $table->string('input_type');
            $table->json('options')->nullable();
            $table->boolean('is_active')->default(true);
            $table->enum('form_page', ['discovery_section', 'get_in_touch', 'footer', 'service']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_requests_form');
    }
};
