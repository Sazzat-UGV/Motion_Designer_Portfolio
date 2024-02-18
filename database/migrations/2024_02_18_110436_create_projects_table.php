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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_title');
            $table->string('project_title_slug');
            $table->longText('short_description');
            $table->string('title_1');
            $table->longText('title_1_description');
            $table->string('title_2')->nullable();
            $table->longText('title_2_description')->nullable();
            $table->string('title_3')->nullable();
            $table->longText('title_3_description')->nullable();
            $table->string('title_4')->nullable();
            $table->longText('title_4_description')->nullable();
            $table->string('thumbnail')->default('default_thumbnail.jpg');
            $table->string('video_link');
            $table->string('behance_link');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
