<?php

use Illuminate\Database\Seeder;

class JournalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asrijournals')->insert([
            'title' => 'Contoh upload file pdf',
            'detail' => 'konsorsium ini adalah untuk mempersatukan para peneliti lintas bidang ilmu. Saat ini, belum ada integrasi yang baik antar peneliti rami sehingga dikhawatirkan penelitian yang dilakukan akan tumpang tindih',
            'file' => 'sp.pdf',
        ]);

        DB::table('asrijournals')->insert([
            'title' => 'Contoh upload file docx',
            'detail' => 'konsorsium ini adalah untuk mempersatukan para peneliti lintas bidang ilmu. Saat ini, belum ada integrasi yang baik antar peneliti rami sehingga dikhawatirkan penelitian yang dilakukan akan tumpang tindih',
            'file' => 'doc.docx',
        ]);
    }
}
