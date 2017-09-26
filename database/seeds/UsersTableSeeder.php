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
        $user = new \App\User;
        $user->name = 'Admin';
        $user->email = 'admin@asriwulandari.com';
        $user->password = bcrypt('123456');
        $user->role = '2';
        $user->save();
    }
}
