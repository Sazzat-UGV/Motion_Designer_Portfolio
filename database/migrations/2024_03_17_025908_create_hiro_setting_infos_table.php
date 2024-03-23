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
        Schema::create('hiro_setting_infos', function (Blueprint $table) {
            $table->id();
            $table->string('hero_main_title');
            $table->string('hiro_image')->nullable();
            $table->string('hero_title_1');
            $table->longText('hero_title_1_description');
            $table->string('hero_title_2')->nullable();
            $table->longText('hero_title_2_description')->nullable();
            $table->string('hero_title_3')->nullable();
            $table->longText('hero_title_3_description')->nullable();
            $table->string('hero_title_4')->nullable();
            $table->longText('hero_title_4_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hiro_setting_infos');
    }
};
