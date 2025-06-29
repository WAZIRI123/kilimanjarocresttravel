<?php

namespace Database\Seeders;

use App\Models\VideoSection;
use Illuminate\Database\Seeder;

class VideoSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if the video section already exists
        if (VideoSection::count() === 0) {
            VideoSection::create([
                'title' => 'Experience The Magic of Tanzania: <strong>Wildlife, Landscapes & Culture</strong>',
                'video_id' => 'zU7YkmqiqPI',
                'thumbnail_url' => 'https://img.youtube.com/vi/zU7YkmqiqPI/maxresdefault.jpg',
                'is_active' => true,
            ]);
        }
    }
}
