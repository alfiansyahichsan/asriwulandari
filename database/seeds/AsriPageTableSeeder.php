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
            'image' => 'bum.jpg',
        ]);
        DB::table('asripagesetting')->insert([
            'title' => 'achievement',
            'image' => 'boom.jpg',
        ]);
        DB::table('asripagesetting')->insert([
            'title' => 'journal',
            'image' => 'c2a.png',
        ]);
    }
}
