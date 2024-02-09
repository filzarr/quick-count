<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$UQbz.vt8zvXyjU0.S4gMoeVontPsowR9myNgYVuoHimwecLlAAaNW',
        ]);
    }
}
