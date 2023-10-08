<?php

namespace App\Livewire;

use Livewire\Component;

class MapWatershedList extends Component
{
    public $watersheds;
    
    public function mount($watersheds)
    {
        $this->watersheds = $watersheds;
    }

    public function selectWatershed($watershed)
    {
        $this->dispatch('selected-watershed', watershed: $watershed);
        $this->dispatch('open-modal', 'edit-watershed');
    }

    public function render()
    {
        return view('livewire.map-watershed-list');
    }

    #[On('refresh-watersheds')] 
    public function refreshWatersheds()  {
       // TODO: re-render/refresh
       $this->watersheds = null;
    }
}
