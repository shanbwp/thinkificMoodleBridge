<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'logo' => "8749586651705562040LOGO.jpg",
            'white_logo' => "7511605571705562040LOGO.png",
            'fav_icon' => '5788800341705562040LOGO.jpg',
            'meta_title' => 'meta',
            'meta_description' => 'description',
            'meta_tag' => 'tag',
            'fb_url' => 'fb',
            'insta_url' => 'insta',
            'twitter_url' => 'twitter',
            'linkedin_url' => 'linkdin',
            'youtube_url' => 'youtube_url',
            'footer_text' => 'footer text'
        ]); 
    }
}
