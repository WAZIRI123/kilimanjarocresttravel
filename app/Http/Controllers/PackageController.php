<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of featured packages.
     */
    public function index()
    {
        $featuredPackages = Package::where('is_featured', true)
            ->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->paginate(9);

        return view('all-packages', [
            'packages' => $featuredPackages
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
