<?php

use Illuminate\Database\Seeder;

class FipulpGalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fipulp_gallery')->insert([
            'image_source' => 'gallery-1.jpg',
            'title' => 'Gambar 1',
            'subtitle' => 'Test Gambar 1',
            'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => '2017-12-12',
            'updated_at' => '2017-12-12',
            'slug' => 'gambar_1'
        ]);

        DB::table('fipulp_gallery')->insert([
            'image_source' => 'gallery-2.jpg',
            'title' => 'Gambar 2',
            'subtitle' => 'Test Gambar 2',
            'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => '2017-12-12',
            'updated_at' => '2017-12-12',
            'slug' => 'gambar_2'
        ]);

        DB::table('fipulp_gallery')->insert([
            'image_source' => 'gallery-3.jpg',
            'title' => 'Gambar 3',
            'subtitle' => 'Test Gambar 3',
            'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => '2017-12-12',
            'updated_at' => '2017-12-12',
            'slug' => 'gambar_3'
        ]);

    }
}
