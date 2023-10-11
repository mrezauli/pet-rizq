<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('companies')->delete();
        
        \DB::table('companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Fay Inc',
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:58',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Williamson, Toy and Mayer',
                'created_at' => '2023-10-10 10:04:59',
                'updated_at' => '2023-10-10 10:04:59',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Breitenberg, Prohaska and Schroeder',
                'created_at' => '2023-10-10 10:04:59',
                'updated_at' => '2023-10-10 10:04:59',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Johnson-Hermann',
                'created_at' => '2023-10-10 10:04:59',
                'updated_at' => '2023-10-10 10:04:59',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}