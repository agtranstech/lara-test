<?php

namespace Database\Seeders;
use App\Models\Project;
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
            'id' => 1,
            'name' => 'Gopi Krishna',
            'email' => 'gopi.muktevi@gmail.com',
            'password' => bcrypt('HelloGopi'),
            'email_verified_at' => time()
        ]);
        User::factory()->create([
            'id' => 2,
            'name' => 'Krishna Kanth K',
            'email' => 'fromkk@gmail.com',
            'password' => bcrypt('HelloKK'),
            'email_verified_at' => time()
        ]);

        Project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
    }
}
