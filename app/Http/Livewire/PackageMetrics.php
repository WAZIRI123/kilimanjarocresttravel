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
        $this->hasLiked = $this->checkIfLiked();
        
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
        if ($this->hasLiked) {
            $this->package->decrement('likes');
            $this->likes = $this->package->fresh()->likes;
            $this->removeFromLikedPackages();
        } else {
            $this->package->increment('likes');
            $this->likes = $this->package->fresh()->likes;
            $this->addToLikedPackages();
        }
        
        $this->hasLiked = !$this->hasLiked;
        // Using dispatch for Livewire 3.x instead of emit
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
        return in_array($this->packageId, $likedPackages);
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
