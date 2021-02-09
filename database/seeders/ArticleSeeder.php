<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            // 'table_name' => 'articles',

            // 'drop_scheme' => "DROP TABLE IF EXISTS `articles`",

            // 'scheme' => "CREATE TABLE IF NOT EXISTS `articles` (
            //             `id` int(11) NOT NULL AUTO_INCREMENT,
            //             `user_id` bigint,
            //             `title` varchar(255),
            //             `excerpt` varchar(255),
            //             `body` text,
            //             `created_at` timestamp,
            //             `updated_at` timestamp,
            //             PRIMARY KEY (`id`)
            //             )",


            // 'seeder' => [
                    'type' => 'array',
                    'data' => array([
                        'user_id'  => 1,
                        'title'      => 'Artikel nummer een',
                        'excerpt'   => 'Dit is de excerpt',
                        'body'       => "Lorem ipsum dolor sit amet nibh de tekst enzo loopt maar door 1 hele zin hoe tof nou zo tof geen interpunctie OOOWJa, toch wel, komma hier, punt daar, alwaar? Aldaar. Okee genoeg gedit en gedat, pewpew, lasers en een kat.",
                        'created'    => date('Y-m-d H:i:s'),
                    ]),
                ]);
                //,
            // ]);
    }
}