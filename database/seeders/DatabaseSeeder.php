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

        \App\Models\User::factory()->create([
            'name' => 'Filament Admin',
            'email' => 'filament@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Pa$$w0rd!'),
            'remember_token' => Str::random(10),
        ]);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryJobTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
    }
}