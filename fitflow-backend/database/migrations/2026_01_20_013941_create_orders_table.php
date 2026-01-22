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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            // User (optional, for future authentication)
            $table->unsignedBigInteger('user_id')->nullable()->index();

            // Goal & profile
            $table->string('goal');
            $table->string('fitness_level');
            $table->string('gender')->nullable();

            // Physical data
            $table->unsignedTinyInteger('age');
            $table->unsignedSmallInteger('height'); // cm
            $table->unsignedSmallInteger('weight'); // kg

            // Training routine
            $table->string('training_frequency');
            $table->string('training_time');
            $table->string('target_deadline');

            // Physical limitations
            $table->boolean('has_physical_limitation')->default(false);
            $table->json('physical_limitations')->nullable();

            // Muscle focus
            $table->json('muscle_groups')->nullable();

            // Diet
            $table->string('diet_type');

            // Allergies
            $table->boolean('has_allergies')->default(false);
            $table->text('allergies')->nullable();

            // Eating behavior
            $table->string('appetite_level');

            // Extra notes
            $table->text('notes')->nullable();

            // Order / payment status
            $table->string('status')->default('pending');
            // pending | paid | cancelled | generated

            // Price
            $table->decimal('price', 8, 2)->default(9.90);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
