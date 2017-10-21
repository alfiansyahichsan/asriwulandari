<?php

use Illuminate\Database\Seeder;

class AsriPostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('asriblogs')->insert([
            'status' => 2,
            'created_by' => 'asri',
            'title' => 'Contoh Blog Menggunakan Gambar',
            'slug' => 'contoh-blog-menggunakan-gambar',
            'subtitle' => '#',
            'img_header' => 'biodegum.jpg',
            'content' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'category' => '1',
            'created_at' => '2017-12-12',
            'updated_at' => '2017-12-12'
        ]);

        DB::table('asriblogs')->insert([
            'status' => 3,
            'created_by' => 'biodegum',
            'title' => 'Contoh Blog Menggunakan Video',
            'slug' => 'contoh-blog-menggunakan-video',
            'subtitle' => 'https://www.youtube.com/embed/co0JdqUlycg',
            'img_header' => 'biodegum.jpg',
            'content' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'category' => '2',
            'created_at' => '2017-12-12',
            'updated_at' => '2017-12-12'
        ]);

        DB::table('asriblogs')->insert([
            'status' => 3,
            'created_by' => 'biodegum',
            'title' => 'Contoh Blog Menggunakan Gambar 3',
            'slug' => 'contoh-blog-menggunakan-gambar-3',
            'subtitle' => '#',
            'img_header' => 'biodegum.jpg',
            'content' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'category' => '1',
            'created_at' => '2017-12-12',
            'updated_at' => '2017-12-12'
        ]);

        DB::table('asriblogs')->insert([
            'status' => 4,
            'created_by' => 'fipulp',
            'title' => 'Contoh Blog Menggunakan Gambar',
            'slug' => 'contoh-blog-menggunakan-gambar',
            'subtitle' => '#',
            'img_header' => 'biodegum.jpg',
            'content' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'category' => '1',
            'created_at' => '2017-12-12',
            'updated_at' => '2017-12-12'
        ]);

        DB::table('asriblogs')->insert([
            'status' => 4,
            'created_by' => 'fipulp',
            'title' => 'Contoh Blog Menggunakan Gambar 2',
            'slug' => 'contoh-blog-menggunakan-gambar-2',
            'subtitle' => '#',
            'img_header' => 'biodegum.jpg',
            'content' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'category' => '1',
            'created_at' => '2017-12-12',
            'updated_at' => '2017-12-12'
        ]);

    }
}
