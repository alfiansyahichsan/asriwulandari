<?php

use Illuminate\Database\Seeder;

class FipulpPageSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biodegum_page_settings')->insert([
            'title' => 'slider',
            'image' => 'biodegum_title.jpg'
        ]);

        DB::table('biodegum_page_settings')->insert([
            'title' => 'slider',
            'image' => 'biodegum_title.jpg'
        ]);


        DB::table('biodegum_page_settings')->insert([
            'title' => 'slider',
            'image' => 'biodegum_title.jpg'
        ]);

}
