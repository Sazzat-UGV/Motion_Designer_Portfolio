<?php

namespace Database\Seeders;

use App\Models\HiroSettingInfo;
use Illuminate\Database\Seeder;

class HiroSettingInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HiroSettingInfo::create([
            'hero_main_title' => 'demo main title',
            'hero_title_1' => 'demo title-1',
            'hero_title_1_description' => 'hero title 1 description',
            // 'hero_title_2' => 'demo title-2',
            // 'hero_title_2_description' => 'hero title 2 description',
            // 'hero_title_3' => 'demo title-3',
            // 'hero_title_3_description' => 'hero title 3 description',
            // 'hero_title_4' => 'demo title-4',
            // 'hero_title_4_description' => 'hero title 4 description',
        ]);
    }
}
