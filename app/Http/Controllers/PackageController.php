<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Activity;
use App\Models\Transfer;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of packages, optionally filtered by category.
     */
    public function index(Request $request)
    {
        
        // Filter by category if provided
        if ($request->query('category')=='zanzibar') {
            $category = $request->query('category');
            $packages = Package::take(6)->get();
            
            // Set appropriate title and subtitle based on category
            $title = match($category) {
                'safari' => 'Safari Packages',
                'zanzibar' => 'Zanzibar Packages',
                'kilimanjaro' => 'Kilimanjaro Packages',
                'activity' => 'Activity Packages',
                'transfer' => 'Transfers Only',
                default => 'Transfers Only'
            };
            
            $subtitle = match($category) {
                'safari' => 'Experience the Wild Beauty of Tanzania',
                'zanzibar' => 'Discover Paradise on Earth',
                'kilimanjaro' => 'Conquer Africa\'s Highest Peak',
                'activity' => 'Activity Packages',
                'transfer' => 'Transfers Only',
                default => 'Your African Adventure Awaits'
            };
        } 

        elseif($request->query('category')=='safari') {
            $category = $request->query('category');
            $packages = Package::where('id', '>', 6)->get();
            
            // Set appropriate title and subtitle based on category
            $title = match($category) {
                'safari' => 'Safari Packages',
                'zanzibar' => 'Zanzibar Packages',
                'kilimanjaro' => 'Kilimanjaro Packages',
                'activity' => 'Zanzibar Excursions',
                'transfer' => 'Transfers Only',
                'car-rental' => 'Car Rental',
                default => 'Our Packages'
            };
            
            $subtitle = match($category) {
                'safari' => 'Experience the Wild Beauty of Tanzania',
                'zanzibar' => 'Discover Paradise on Earth',
                'kilimanjaro' => 'Conquer Africa\'s Highest Peak',
                'activity' => 'zanzibar excursions',
                'transfer' => 'Transfers Only',
                'car-rental' => 'Car Rental',
                default => 'Your African Adventure Awaits'
            };
        }
        elseif($request->query('category')=='activity') {
            $category = $request->query('category');
            $packages = Activity::all();
            
            // Set appropriate title and subtitle based on category
            $title = match($category) {
                'safari' => 'Safari Packages',
                'zanzibar' => 'Zanzibar Packages',
                'kilimanjaro' => 'Kilimanjaro Packages',
                'activity' => 'Zanzibar Excursions',
                'transfer' => 'Transfers Only',
                default => 'Our Packages'
            };
            
            $subtitle = match($category) {
                'safari' => 'Experience the Wild Beauty of Tanzania',
                'zanzibar' => 'Discover Paradise on Earth',
                'kilimanjaro' => 'Conquer Africa\'s Highest Peak',
                'activity' => 'Activity Packages',
                'transfer' => 'Transfers Only',
                default => 'Your African Adventure Awaits'
            };
        }

        elseif($request->query('category')=='transfer') {
            $category = $request->query('category');
            $packages = Transfer::all();
            // Set appropriate title and subtitle based on category
            $title = match($category) {
                'safari' => 'Safari Packages',
                'zanzibar' => 'Zanzibar Packages',
                'kilimanjaro' => 'Kilimanjaro Packages',
                'activity' => 'Zanzibar Excursions',
                'transfer' => 'Transfers Only',
                default => 'Our Packages'
            };
            
            $subtitle = match($category) {
                'safari' => 'Experience the Wild Beauty of Tanzania',
                'zanzibar' => 'Discover Paradise on Earth',
                'kilimanjaro' => 'Conquer Africa\'s Highest Peak',
                'activity' => 'Activity Packages',
                'transfer' => 'Transfers Only',
                default => 'Your African Adventure Awaits'
            };
        }

        else {
            $title = 'Featured Packages';
            $subtitle = 'Your African Adventure Awaits';
            $packages = Package::paginate(6);
        }

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
