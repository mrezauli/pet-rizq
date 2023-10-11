<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locations')->delete();
        
        \DB::table('locations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Missouri',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Wyoming',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'South Dakota',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Minnesota',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'New Hampshire',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Idaho',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'New Jersey',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}