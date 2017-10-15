<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(FipulpBlogTableSeeder::class);
        $this->call(FipulpGalleryTableSeeder::class);
        $this->call(AsriAboutTableSeeder::class);
        $this->call(AsriPageTableSeeder::class);
        $this->call(AsriPostsTableSeeder::class);
        $this->call(GalleryTableSeeder::class);
        $this->call(AchievementTableSeeder::class);
        $this->call(HasilRisetTableSeeder::class);
        $this->call(JournalTableSeeder::class);
        //$this->call(BiodegumPostsTableSeeder::class);
        $this->call(BiodegumPortfolioTableSeeder::class);
        $this->call(BiodegumPageSettingTableSeeder::class);
        $this->call(FipulpPageSettingsTableSeeder::class);
    }
}

