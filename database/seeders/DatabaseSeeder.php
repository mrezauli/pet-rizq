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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryJobTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(OauthAccessTokensTableSeeder::class);
        $this->call(OauthAuthCodesTableSeeder::class);
        $this->call(OauthClientsTableSeeder::class);
        $this->call(OauthPersonalAccessClientsTableSeeder::class);
        $this->call(OauthRefreshTokensTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
