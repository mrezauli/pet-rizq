<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobs')->delete();
        
        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Law Enforcement Teacher',
                'short_description' => 'Autem ut qui dolorum error eligendi.',
                'full_description' => 'Et velit quos praesentium ullam debitis officiis aut. Omnis veniam quas minus eligendi. Aut ut vel tenetur dolor. Dolor nostrum provident iusto provident ducimus illum aliquam.',
                'requirements' => 'Explicabo doloremque non itaque itaque magnam. Cupiditate culpa nulla ut animi voluptas in cum. Quae totam esse quam minus. Rerum omnis est perferendis labore vel voluptates illo. Aliquid commodi suscipit ut eos mollitia quisquam quas excepturi.',
                'job_nature' => 'Full-time',
                'address' => '730 West Passage
Verdaport, FL 07582-5561',
                'top_rated' => 1,
                'salary' => '15k - 25k',
                'created_at' => '2023-10-10 10:05:00',
                'updated_at' => '2023-10-10 10:05:00',
                'deleted_at' => NULL,
                'location_id' => 3,
                'company_id' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Insurance Appraiser',
                'short_description' => 'Omnis ex in consequuntur expedita et amet in.',
                'full_description' => 'Unde voluptatem quidem dolorum vel nulla. Sed fugiat consequuntur saepe qui et autem. Labore eveniet nostrum in perspiciatis earum. Adipisci facere dolore ullam est.',
                'requirements' => 'Qui neque sunt tenetur corrupti corrupti et officiis. Quaerat sit doloribus quam est. Odit eveniet ut quisquam qui aliquam voluptas.',
                'job_nature' => 'Full-time',
                'address' => '35374 Emmerich Run
Lisetteville, NC 85714',
                'top_rated' => 1,
                'salary' => '15k - 25k',
                'created_at' => '2023-10-10 10:05:00',
                'updated_at' => '2023-10-10 10:05:00',
                'deleted_at' => NULL,
                'location_id' => 5,
                'company_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Civil Drafter',
                'short_description' => 'Sed ex architecto quia dignissimos molestias et.',
                'full_description' => 'Omnis voluptas quibusdam sunt enim dignissimos. Unde ullam dolores consectetur. Nihil quia quia numquam illo deserunt est.',
                'requirements' => 'Quo velit iusto nisi. Quidem qui fugit qui magni qui. Explicabo autem placeat iusto.',
                'job_nature' => 'Full-time',
                'address' => '67189 Pollich Mews
West Virginia, NY 34988',
                'top_rated' => 1,
                'salary' => '15k - 25k',
                'created_at' => '2023-10-10 10:05:00',
                'updated_at' => '2023-10-10 10:05:00',
                'deleted_at' => NULL,
                'location_id' => 1,
                'company_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Restaurant Cook',
                'short_description' => 'Doloremque odit nesciunt nihil qui a quae quia excepturi.',
                'full_description' => 'Quia tempora rerum exercitationem. Et neque laborum esse nihil.',
                'requirements' => 'Sit distinctio facilis rerum quaerat eaque. Vitae illo commodi totam atque voluptas eius nihil. Alias quo itaque harum reiciendis ea autem. Quidem quae nulla aspernatur adipisci et eum. Autem et in amet qui et voluptatibus ipsam.',
                'job_nature' => 'Full-time',
                'address' => '69087 Wunsch Brook
Kyraton, LA 56007-4151',
                'top_rated' => 1,
                'salary' => '15k - 25k',
                'created_at' => '2023-10-10 10:05:00',
                'updated_at' => '2023-10-10 10:05:00',
                'deleted_at' => NULL,
                'location_id' => 5,
                'company_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Animal Care Workers',
                'short_description' => 'Officiis praesentium reiciendis recusandae voluptatem.',
                'full_description' => 'Deleniti sapiente voluptas nemo est non ratione quis. Facere ipsa voluptas inventore molestiae. Corrupti et totam tempore nostrum doloremque voluptatem. Est quia doloremque sapiente in itaque dolore.',
                'requirements' => 'Tenetur quod nobis aliquid expedita dolor sed harum voluptatem. Mollitia rerum dolorum adipisci autem est modi. Ut tempora dignissimos dolores ut amet. Reiciendis dolorum dignissimos iusto delectus adipisci. Inventore vel cupiditate veritatis provident fuga.',
                'job_nature' => 'Full-time',
                'address' => '4347 Oleta Glens Apt. 469
Port Wiltonmouth, MI 38388-8647',
                'top_rated' => 0,
                'salary' => '15k - 25k',
                'created_at' => '2023-10-10 10:05:00',
                'updated_at' => '2023-10-10 10:05:00',
                'deleted_at' => NULL,
                'location_id' => 6,
                'company_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Textile Machine Operator',
                'short_description' => 'A pariatur veritatis excepturi cumque corporis voluptas temporibus.',
                'full_description' => 'Reiciendis a dicta dolor sapiente ut velit ex qui. Eum praesentium harum omnis aliquid non. Sit consectetur voluptatem voluptate sed eligendi quia quo. Optio recusandae fugit est saepe eos.',
                'requirements' => 'Dolores et dolor mollitia repellendus adipisci molestiae incidunt. Molestiae nam possimus aperiam architecto illo quae. Asperiores est vitae saepe consequuntur distinctio facilis autem. Impedit odio incidunt fugiat hic sequi maiores.',
                'job_nature' => 'Full-time',
                'address' => '13608 Trantow Corner Apt. 272
Portermouth, PA 64111',
                'top_rated' => 0,
                'salary' => '15k - 25k',
                'created_at' => '2023-10-10 10:05:00',
                'updated_at' => '2023-10-10 10:05:00',
                'deleted_at' => NULL,
                'location_id' => 1,
                'company_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Wind Instrument Repairer',
                'short_description' => 'Error eveniet est expedita nihil ipsam aliquid.',
                'full_description' => 'Saepe quae odio ratione molestiae voluptates ut. Illum repudiandae cupiditate autem libero molestiae esse. Magni unde deleniti qui dolores dolorem dicta accusantium. Impedit voluptas illo quia cum sequi similique iusto.',
                'requirements' => 'Voluptas sunt nam corporis praesentium error nam aliquam. Consequatur dolores fuga vel est placeat alias. Ut laudantium doloremque perferendis quam enim. Voluptatem dicta sapiente dignissimos incidunt.',
                'job_nature' => 'Full-time',
                'address' => '8098 Ashlee Trail
Brownborough, DC 57077',
                'top_rated' => 0,
                'salary' => '15k - 25k',
                'created_at' => '2023-10-10 10:05:00',
                'updated_at' => '2023-10-10 10:05:00',
                'deleted_at' => NULL,
                'location_id' => 5,
                'company_id' => 1,
            ),
        ));
        
        
    }
}