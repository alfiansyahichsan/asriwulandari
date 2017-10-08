<?php

use Illuminate\Database\Seeder;

class FipulpBlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fipulp_blog')->insert([
            'status' => 1,
            'created_by' => 1,
            'title' => 'Blog 1 : Testing Fipulop Blog',
            'subtitle' => 'Ini Subtitle',
            'img_header' => 'post-1.jpg',
            'content' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => '2017-12-12',
            'updated_at' => '2017-12-12'
        ]);

        DB::table('fipulp_blog')->insert([
            'status' => 1,
            'created_by' => 1,
            'title' => 'Blog 2 : Testing Fipulop Blog',
            'subtitle' => 'Ini Subtitle',
            'img_header' => 'post-2.jpg',
            'content' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => '2017-12-12',
            'updated_at' => '2017-12-12'
        ]);

        DB::table('fipulp_blog')->insert([
            'status' => 1,
            'created_by' => 1,
            'title' => 'Blog 3 : Testing Fipulop Blog',
            'subtitle' => 'Ini Subtitle',
            'img_header' => 'post-3.jpg',
            'content' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => '2017-12-12',
            'updated_at' => '2017-12-12'
        ]);
    }
}
