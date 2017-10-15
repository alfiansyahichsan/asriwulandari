<?php

use Illuminate\Database\Seeder;

class AsriPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asripagesetting')->insert([
            'title' => 'slider',
            'image' => 'slider.jpg',
        ]);
        DB::table('asripagesetting')->insert([
            'title' => 'achievement',
            'image' => 'achievement.jpg',
        ]);
        DB::table('asripagesetting')->insert([
            'title' => 'journal',
            'image' => 'journal.jpg',
        ]);
    }
}
