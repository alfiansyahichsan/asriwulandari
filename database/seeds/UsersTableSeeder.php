<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super Administrator',
            'email' => 'admin@asriwulandari.com',
            'password' => bcrypt('123456'),
            'role' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Administrator Asri',
            'email' => 'asri@asriwulandari.com',
            'password' => bcrypt('123456'),
            'role' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Administrator BioDegum',
            'email' => 'adminbiodegum@asriwulandari.com',
            'password' => bcrypt('123456'),
            'role' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'Administrator Fipulp',
            'email' => 'adminfipulp@asriwulandari.com',
            'password' => bcrypt('123456'),
            'role' => 4,
        ]);
    }
}
