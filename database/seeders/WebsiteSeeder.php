<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Website;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample websites data
        $websites = [
            ['name' => 'Tech News', 'url' => 'https://technews.com'],
            ['name' => 'Health Tips', 'url' => 'https://healthtips.com'],
            ['name' => 'Travel Diaries', 'url' => 'https://traveldiaries.com'],
            ['name' => 'Food Blog', 'url' => 'https://foodblog.com'],
            ['name' => 'Fitness Guru', 'url' => 'https://fitnessguru.com'],
            ['name' => 'Fashion Trends', 'url' => 'https://fashiontrends.com'],
            ['name' => 'Crypto Insights', 'url' => 'https://cryptoinights.com'],
            ['name' => 'Gaming World', 'url' => 'https://gamingworld.com'],
            ['name' => 'Movie Reviews', 'url' => 'https://moviereviews.com'],
            ['name' => 'Music Paradise', 'url' => 'https://musicparadise.com'],
            ['name' => 'DIY Projects', 'url' => 'https://diyprojects.com'],
            ['name' => 'Parenting Tips', 'url' => 'https://parentingtips.com'],
            ['name' => 'Gardening Secrets', 'url' => 'https://gardeningsecrets.com'],
            ['name' => 'Sports Zone', 'url' => 'https://sportszone.com'],
            ['name' => 'History Hub', 'url' => 'https://historyhub.com'],
        ];

        foreach ($websites as $website) {
            Website::create($website);
        }
    }
}
