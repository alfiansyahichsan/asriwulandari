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
            'image' => 'bum.jpg',
        ]);
        DB::table('biodegum_pages')->insert([
            'title' => 'portfolio',
            'image' => 'boom.jpg',
        ]);
        DB::table('biodegum_pages')->insert([
            'title' => 'instagram',
            'image' => 'c2a.png',
        ]);
        DB::table('biodegum_pages')->insert([
            'title' => 'contact',
            'image' => 'c2a.png',
        ]);
    }
}
