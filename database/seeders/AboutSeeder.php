<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       About::create([
        'name'=>'Demo Name',
        'about_me'=>'Hello, my name is Kimathi Flavien. I am a french freelance 2D animator and graphic designer.',
        'email'=>'demo@gmail.com',
        'phone'=>'6446454545',
        'location'=>'demo location',
        'instagram'=>'demoinsta',
        'linkedin'=>'demolinkedin',
        'behance'=>'demobehance',
       ]);
    }
}
