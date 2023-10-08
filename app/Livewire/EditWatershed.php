<?php

namespace App\Livewire;

use App\Models\Watershed;
use Livewire\Component;
use Livewire\Attributes\On; 

class EditWatershed extends Component
{
    public $id;
    public $name;
    public $latitude;
    public $longitude;

    protected $rules = [
        'name' => 'required|min:6',
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
    ];

    #[On('selected-watershed')] 
    public function setSelectedWatershed($watershed) {
        $ws = (object)$watershed;
        $this->id = $ws->id;
        $this->name = $ws->name;
        $this->latitude = $ws->latitude;
        $this->longitude = $ws->longitude;
    }

    public function render()
    {
        return view('livewire.edit-watershed');
    }

    public function update() {
        $data = $this->validate();

        Watershed::findOrFail($this->id)->update([
            'name' => $data['name'],
            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],
        ]);

        $this->dispatch('refresh-watersheds');
        $this->dispatch('close', 'edit-watershed');
        $this->reset();
    }
}
