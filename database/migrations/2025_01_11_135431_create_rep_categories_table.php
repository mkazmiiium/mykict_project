<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rep_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Category name
            $table->timestamps();
        });

        DB::table('rep_categories')->insert([
            ['name' => 'Good Governance', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Quality Teaching and Learning', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Research and Innovation', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Holistic Student Development', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Internationalisation', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Financial Sustainability', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Talent Management', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Campus Sustainability', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ICT', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rep_categories');
    }
};
