<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(9)->create();
        \App\Models\Designation::factory(10)->create();
        \App\Models\Salary::factory(10)->create();
        \App\Models\Age::factory(10)->create();
        \App\Models\Qualification::factory(10)->create();
        \App\Models\Experience::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\CategoryJob::factory(10)->create();
        \App\Models\Company::factory(10)->create();
        \App\Models\Location::factory(10)->create();
        \App\Models\Job::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Filament Admin',
            'email' => 'filament@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Pa$$w0rd!'),
            'remember_token' => Str::random(10),
        ]);
    }
}
