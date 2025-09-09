<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Đắc Lợi',
            'email' => 'saka.dacloi@gmail.com',
            'author_id' => 1,
            'password' => Hash::make('123'),
        ]);

        User::factory()->create([
            'name' => 'Đắc Lợi',
            'email' => 'saka.dacloi@gmail.com',
            'password' => '$2y$12$mPYhF/ek3aKTg4S5O0HYleXfI/62/jSLgRqeQ31ZC.f.DqddAgO7O',
        ]);
    }
}
