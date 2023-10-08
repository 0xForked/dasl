<?php

namespace App\Livewire;

use App\Models\Watershed;
use Livewire\Component;
use Livewire\Attributes\On; 

class MapContainer extends Component
{
    public $watersheds;

    public function mount()
    {
        $this->watersheds = Watershed::all();
    }

    public function render()
    {
        return view('livewire.map-container');
    }

    #[On('refresh-watersheds')] 
    public function refreshWatersheds()  {
       // TODO: re-render/refresh
       $this->watersheds = null;
    }
}
