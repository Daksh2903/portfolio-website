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
        Schema::table('achievements', function ($table) {

            $table->date('achievement_date')->nullable();

            $table->string('image')->nullable();

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('achievements', function ($table) {

            $table->dropColumn('achievement_date');

            $table->dropColumn('image');

        });
    }
};
