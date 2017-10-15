<?php

use Illuminate\Database\Seeder;

class AchievementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asriachievement')->insert([
            'title' => 'Bina Riset',
            'slug' => 'Bina Riset',
            'detail' => 'Bina Riset',
        ]);

        DB::table('asriachievement')->insert([
            'title' => 'Bina Riset',
            'slug' => 'Bina Riset',
            'detail' => 'Bina Riset',
        ]);

        DB::table('asriachievement')->insert([
            'title' => 'Bina Riset',
            'slug' => 'Bina Riset',
            'detail' => 'Bina Riset',
        ]);
    }
}
