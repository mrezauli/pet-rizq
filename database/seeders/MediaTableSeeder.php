<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('media')->delete();
        
        \DB::table('media')->insert(array (
            0 => 
            array (
                'id' => 1,
                'model_type' => 'App\\Company',
                'model_id' => 1,
                'uuid' => '360ec04c-b3ae-4001-8cb9-42232432fcce',
                'collection_name' => 'logo',
                'name' => 'post',
                'file_name' => 'post.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 4323,
                'manipulations' => '[]',
                'custom_properties' => '{"generated_conversions": {"thumb": true}}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-10-10 10:04:58',
                'updated_at' => '2023-10-10 10:04:59',
            ),
            1 => 
            array (
                'id' => 2,
                'model_type' => 'App\\Company',
                'model_id' => 2,
                'uuid' => '6c387107-c9a1-4692-9278-191f61d92d4b',
                'collection_name' => 'logo',
                'name' => 'post',
                'file_name' => 'post.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 4323,
                'manipulations' => '[]',
                'custom_properties' => '{"generated_conversions": {"thumb": true}}',
                'responsive_images' => '[]',
                'order_column' => 2,
                'created_at' => '2023-10-10 10:04:59',
                'updated_at' => '2023-10-10 10:04:59',
            ),
            2 => 
            array (
                'id' => 3,
                'model_type' => 'App\\Company',
                'model_id' => 3,
                'uuid' => '86935b71-9856-4c3b-95d7-7e6447869013',
                'collection_name' => 'logo',
                'name' => 'post',
                'file_name' => 'post.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 4323,
                'manipulations' => '[]',
                'custom_properties' => '{"generated_conversions": {"thumb": true}}',
                'responsive_images' => '[]',
                'order_column' => 3,
                'created_at' => '2023-10-10 10:04:59',
                'updated_at' => '2023-10-10 10:04:59',
            ),
            3 => 
            array (
                'id' => 4,
                'model_type' => 'App\\Company',
                'model_id' => 4,
                'uuid' => 'caed9e77-b586-446f-8362-a28726bb38a0',
                'collection_name' => 'logo',
                'name' => 'post',
                'file_name' => 'post.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 4323,
                'manipulations' => '[]',
                'custom_properties' => '{"generated_conversions": {"thumb": true}}',
                'responsive_images' => '[]',
                'order_column' => 4,
                'created_at' => '2023-10-10 10:04:59',
                'updated_at' => '2023-10-10 10:05:00',
            ),
        ));
        
        
    }
}