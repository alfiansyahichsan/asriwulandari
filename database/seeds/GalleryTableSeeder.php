<?php

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asrigalleries')->insert([
            'title' => 'contoh 1',
            'slug' => 'contoh 1',
            'image' => '1.jpg',
        ]);

        DB::table('asrigalleries')->insert([
            'title' => 'contoh 2',
            'slug' => 'contoh 2',
            'image' => '2.jpg',
        ]);

        DB::table('asrigalleries')->insert([
            'title' => 'contoh 3',
            'slug' => 'contoh 3',
            'image' => '3.jpg',
        ]);

        DB::table('asrigalleries')->insert([
            'title' => 'contoh 4',
            'slug' => 'contoh 4',
            'image' => '4.jpg',
        ]);

        DB::table('asrigalleries')->insert([
            'title' => 'contoh 5',
            'slug' => 'contoh 5',
            'image' => '5.jpg',
        ]);

        DB::table('asrigalleries')->insert([
            'title' => 'contoh 6',
            'slug' => 'contoh 6',
            'image' => '6.jpg',
        ]);

        DB::table('asrigalleries')->insert([
            'title' => 'contoh 7',
            'slug' => 'contoh 7',
            'image' => '7.jpg',
        ]);

        DB::table('asrigalleries')->insert([
            'title' => 'contoh 8',
            'slug' => 'contoh 8',
            'image' => '8.jpg',
        ]);
    }
}
