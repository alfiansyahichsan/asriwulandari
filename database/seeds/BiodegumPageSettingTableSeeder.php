<?php

use Illuminate\Database\Seeder;

class BiodegumPageSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biodegum_pages')->insert([
            'title' => 'slider',
            'image' => 'slider.jpg',
        ]);
        DB::table('biodegum_pages')->insert([
            'title' => 'portfolio',
            'image' => 'instagram.png',
        ]);
        DB::table('biodegum_pages')->insert([
            'title' => 'instagram',
            'image' => 'instagram.png',
        ]);
        DB::table('biodegum_pages')->insert([
            'title' => 'contact',
            'image' => 'contact.jpg',
        ]);
    }
}
