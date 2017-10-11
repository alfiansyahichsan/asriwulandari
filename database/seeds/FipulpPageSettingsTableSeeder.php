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
        DB::table('fipulppages')->insert([
            'title' => 'slider',
            'image' => 'biodegum_title.jpg'
        ]);

        DB::table('fipulppages')->insert([
            'title' => 'team',
            'image' => 'biodegum_title.jpg'
        ]);


        DB::table('fipulppages')->insert([
            'title' => 'contact',
            'image' => 'biodegum_title.jpg'
        ]);

    }
}
