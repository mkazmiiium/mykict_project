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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            // Foreign keys
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relation to users table
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade'); // Relation to departments table
            $table->foreignId('rep_category_id')->constrained('rep_categories')->onDelete('cascade'); // Relation to rep_categories table
            $table->string('activities');
            $table->date('date_from');
            $table->date('date_to');
            $table->string('status');
            $table->boolean('highlight')->default(false);
            $table->string('evidence1')->nullable(); // To store image URL
            $table->string('evidence2')->nullable(); // To store image URL
            $table->string('evidence3')->nullable(); // To store image URL
            $table->text('project_impact')->nullable();
            $table->boolean('sf_area1')->default(false);
            $table->boolean('sf_area2')->default(false);
            $table->boolean('sf_area3')->default(false);
            $table->boolean('sf_area4')->default(false);
            $table->boolean('sf_area5')->default(false);
            $table->boolean('sf_area6')->default(false);
            $table->boolean('sf_area7')->default(false);
            $table->boolean('sf_area8')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
