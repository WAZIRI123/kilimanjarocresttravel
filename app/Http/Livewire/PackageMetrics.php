<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Package;
use Illuminate\Support\Facades\Cookie;

class PackageMetrics extends Component
{
    public $package;
    public $views;
    public $likes;
    public $hasLiked = false;
    public $packageId;

    protected $listeners = ['likeToggled' => 'updateLikes'];

    public function mount(Package $package)
    {
        $this->package = $package;
        $this->packageId = $package->id;
        $this->views = $package->views;
        $this->likes = $package->likes;
        
        // Check if package is liked in cookies
        $cookieLiked = $this->checkIfLiked();
        
        // If cookie says it's liked but likes count is 0, fix the inconsistency
        if ($cookieLiked && $this->likes <= 0) {
            $this->removeFromLikedPackages();
            $this->hasLiked = false;
        } else {
            $this->hasLiked = $cookieLiked;
        }
        
        // Increment view count if not viewed in this session
        if (!session()->has('viewed_package_' . $this->packageId)) {
            $this->incrementViews();
            session(['viewed_package_' . $this->packageId => true]);
            
            // Refresh the component to show updated view count
            $this->dispatch('$refresh');
        }
    }

    public function toggleLike()
    {
        // Toggle the like state immediately for better UX
        $this->hasLiked = !$this->hasLiked;
        
        // Get fresh package data to ensure we have the latest like count
        $freshPackage = $this->package->fresh();
        
        if ($this->hasLiked) {
            // Increment and add to liked packages
            $this->package->increment('likes');
            $this->addToLikedPackages();
        } else {
            // Only decrement if the current like count is greater than 0
            if ($freshPackage->likes > 0) {
                $this->package->decrement('likes');
            }
            $this->removeFromLikedPackages();
        }
        
        // Update the likes count from fresh data
        $this->likes = $this->package->fresh()->likes;
        
        // Ensure the like state is in sync with the database
        if ($this->likes <= 0) {
            $this->hasLiked = false;
            $this->removeFromLikedPackages();
        }
        
        // Notify other components about the like toggle
        $this->dispatch('likeToggled');
    }

    private function incrementViews()
    {
        $this->package->increment('views');
        $this->views = $this->package->fresh()->views;
    }

    private function checkIfLiked()
    {
        $likedPackages = json_decode(Cookie::get('liked_packages', '[]'), true);
        return in_array($this->packageId, (array)$likedPackages);
    }

    private function addToLikedPackages()
    {
        $likedPackages = json_decode(Cookie::get('liked_packages', '[]'), true);
        if (!in_array($this->packageId, $likedPackages)) {
            $likedPackages[] = $this->packageId;
            Cookie::queue('liked_packages', json_encode($likedPackages), 60 * 24 * 30 * 12); // 1 year
        }
    }

    private function removeFromLikedPackages()
    {
        $likedPackages = json_decode(Cookie::get('liked_packages', '[]'), true);
        $likedPackages = array_diff($likedPackages, [$this->packageId]);
        Cookie::queue('liked_packages', json_encode(array_values($likedPackages)), 60 * 24 * 30 * 12);
    }

    public function render()
    {
        return view('livewire.package-metrics');
    }
}
