<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all active packages grouped by country
        $packages = Package::where('is_active', true)
            ->orderBy('country')
            ->orderBy('sort_order')
            ->get();
            
        // Group packages by country
        $groupedPackages = $packages->groupBy('country');

        return view('destinations', [
            'title' => 'Our Safari Destinations',
            'subtitle' => 'Explore Our African Safari Destinations',
            'groupedPackages' => $groupedPackages,
            'packages' => $packages->take(6) // Keep some packages for any existing carousel/featured section
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($country)
    {
        // Decode URL-encoded country name
        $country = urldecode($country);
        
        // Get active packages for this country
        $packages = Package::where('is_active', true)
            ->where('country', $country)
            ->orderBy('sort_order', 'asc')
            ->paginate(9);

        // If no packages found, redirect to destinations index with message
        if ($packages->isEmpty()) {
            return redirect()->route('destinations')
                ->with('message', 'No packages found for the selected destination.');
        }

        return view('destinations-show', [
            'title' => "Packages in $country",
            'subtitle' => "Explore our safari packages in $country",
            'packages' => $packages,
            'currentCategory' => null
        ]);
    }
}
