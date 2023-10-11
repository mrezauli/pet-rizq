<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy',
                'remember_token' => '5aGkBPXF1c37sfY4ZvCzWGLLGcr4ZM6lVjxI1mpW0QWQF72ZzxAtJS3cy2Mr',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}