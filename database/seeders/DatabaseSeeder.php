<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@admin.com'
        ]);

        \App\Models\Workspace::factory(5)->create();
        \App\Models\Project::factory(20)->create();
        \App\Models\ProjectList::factory(40)->create();
        \App\Models\Cards::factory(80)->create();
    }
}
