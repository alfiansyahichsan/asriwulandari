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
            'detail' => '“Daun, batang, dan akar tanaman rami memiliki manfaat. Daunnya memiliki antioksidan yang setara dengan teh hijau. Batangnya bisa dijadikan serat, akarnya juga bisa dimanfaatkan sebagai benih,” ujar Asri.

Meski memiliki kualitas bagus, saat ini tanaman rami sulit berkembang. Padahal, Indonesia sudah berusaha mengembangkan tanaman ini sejak 20 tahun yang lalu. Menurut Asri, penyebabnya adalah gagalnya sistem pengembangan agribisnis yang tidak dirancang secara hulu hilir teknologi.',
            'image' => '1-asri.jpg',
        ]);
    }
}
