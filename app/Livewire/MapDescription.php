<?php

namespace App\Livewire;

use Livewire\Component;

class MapDescription extends Component
{
    private function descriptions() {
        return [
           (object)["name" => "Ibukota Provinsi",  "icon" => ""],
           (object)["name" => "Ibukota Kabupaten",  "icon" => ""],
           (object)["name" => "Batas Provinsi",  "icon" => ""],
           (object)["name" => "Batas Kabupaten",  "icon" => ""],
           (object)["name" => "Batas Kelompok Pulau-<br>Pulau Dalam WS",  "icon" => ""],
           (object)["name" => "Batas Wilayah Sungai",  "icon" => ""],
           (object)["name" => "Batas DAS",  "icon" => ""],
           (object)["name" => "Garis Pantai",  "icon" => ""],
           (object)["name" => "Sungai",  "icon" => ""],
           (object)["name" => "Waduk/Danau",  "icon" => ""],
        ];
    }

    public function render()
    {
        return view('livewire.map-description', [
            'descriptions' => $this->descriptions(),
        ]);
    }
}
