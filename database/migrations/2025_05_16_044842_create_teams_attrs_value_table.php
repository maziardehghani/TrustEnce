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
        Schema::create('teams_attrs_value', function (Blueprint $table) {
            $table->id();

            $table->foreignId('attr_title_id')
                ->constrained('teams_attrs_title');

            $table->foreignId('team_id')
                ->constrained('teams');


            $table->string('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams_attrs_value');
    }
};
