<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Technology',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Media & News',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Goverment',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Medical',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Restaurants',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Developer',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Accounting',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}