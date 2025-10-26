<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [];
        
        // Get all PHP files from the packages directory and its subdirectories
        $packageFiles = File::allFiles(database_path('data/packages'));
        
        foreach ($packageFiles as $file) {
            if ($file->getExtension() === 'php') {
                $packageData = include $file->getPathname();
                if (is_array($packageData)) {
                    $packages[] = $packageData;
                }
            }
        }

        foreach ($packages as $package) {
            // Generate slug from title if not set
            if (!isset($package['slug']) || empty($package['slug'])) {
                $package['slug'] = Str::slug($package['title']);
            }
            
            // Create the package
            Package::updateOrCreate(
                ['slug' => $package['slug']],
                $package
            );
        }
    }
}
