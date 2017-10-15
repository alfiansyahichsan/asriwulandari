<?php

use Illuminate\Database\Seeder;

class HasilRisetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asrihasilriset')->insert([
            'title' => 'Biodegum',
            'deskripsi' => 'konsorsium ini adalah untuk mempersatukan para peneliti lintas bidang ilmu. Saat ini, belum ada integrasi yang baik antar peneliti rami sehingga dikhawatirkan penelitian yang dilakukan akan tumpang tindih',
            'image' => 'biod.jpg',
            'link' => '#',
        ]);

        DB::table('asrihasilriset')->insert([
            'title' => 'Fipulp',
            'deskripsi' => 'tanaman rami',
            'image' => 'fipulp.jpg',
            'link' => '#',
        ]);
    }
}
