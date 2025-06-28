<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of packages, optionally filtered by category.
     */
    public function index(Request $request)
    {
        $query = Package::where('is_active', true);
        
        // Filter by category if provided
        if ($request->has('category')) {
            $category = $request->query('category');
            $query->where('category', $category);
            
            // Set appropriate title and subtitle based on category
            $title = match($category) {
                'safari' => 'Safari Packages',
                'zanzibar' => 'Zanzibar Packages',
                'kilimanjaro' => 'Kilimanjaro Packages',
                default => 'Our Packages'
            };
            
            $subtitle = match($category) {
                'safari' => 'Experience the Wild Beauty of Tanzania',
                'zanzibar' => 'Discover Paradise on Earth',
                'kilimanjaro' => 'Conquer Africa\'s Highest Peak',
                default => 'Your African Adventure Awaits'
            };
        } else {
            $title = 'Featured Packages';
            $subtitle = 'Your African Adventure Awaits';
            $query->where('is_featured', true);
        }
        
        $packages = $query->orderBy('sort_order', 'asc')
                        ->paginate(9);

        return view('all-packages', [
            'packages' => $packages,
            'title' => $title,
            'subtitle' => $subtitle,
            'currentCategory' => $request->query('category')
        ]);
    }
    /**
     * Display the specified package.
     */
    /**
     * Display the specified package.
     */
    public function show(Package $package)
    {
        // Get related packages (excluding the current one)
        $relatedPackages = Package::where('id', '!=', $package->id)
            ->where('is_active', true)
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('package', [
            'package' => $package,
            'relatedPackages' => $relatedPackages,
        ]);
    }
}
