<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryJobTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_job')->delete();
        
        \DB::table('category_job')->insert(array (
            0 => 
            array (
                'job_id' => 1,
                'category_id' => 1,
            ),
            1 => 
            array (
                'job_id' => 1,
                'category_id' => 3,
            ),
            2 => 
            array (
                'job_id' => 2,
                'category_id' => 6,
            ),
            3 => 
            array (
                'job_id' => 2,
                'category_id' => 7,
            ),
            4 => 
            array (
                'job_id' => 3,
                'category_id' => 1,
            ),
            5 => 
            array (
                'job_id' => 3,
                'category_id' => 5,
            ),
            6 => 
            array (
                'job_id' => 4,
                'category_id' => 1,
            ),
            7 => 
            array (
                'job_id' => 4,
                'category_id' => 2,
            ),
            8 => 
            array (
                'job_id' => 4,
                'category_id' => 4,
            ),
            9 => 
            array (
                'job_id' => 5,
                'category_id' => 3,
            ),
            10 => 
            array (
                'job_id' => 5,
                'category_id' => 6,
            ),
            11 => 
            array (
                'job_id' => 6,
                'category_id' => 1,
            ),
            12 => 
            array (
                'job_id' => 6,
                'category_id' => 2,
            ),
            13 => 
            array (
                'job_id' => 6,
                'category_id' => 7,
            ),
            14 => 
            array (
                'job_id' => 7,
                'category_id' => 1,
            ),
        ));
        
        
    }
}