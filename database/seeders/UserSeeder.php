<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
        'name'=>'Nahid',
        'email'=>'admin@gmail.com',
        'email_verified_at'=>now(),
        'password'=>'admin@gmail.com',
        'remember_token'=>Str::random(10),
       ]);
    }
}
