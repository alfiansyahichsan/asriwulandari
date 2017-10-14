<?php

use Illuminate\Database\Seeder;

class AsriAboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asriaabout')->insert([
            'name' => 'Asri Penny Wulandari PhD',
            'detail' => 'saya asri wulandari',
            'image' => '1-asri.jpg',
        ]);
    }
}
