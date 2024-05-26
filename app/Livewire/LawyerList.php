<?php

namespace App\Livewire;

use Livewire\Component;

class LawyerList extends Component
{
    public $lawyers = [];
    public $filteredLawyers = [];
    public $selectedSpecialty = 'Semua';

    public function mount()
    {
        $json = file_get_contents(public_path('dummy-pengacara.json'));
        $this->lawyers = json_decode($json, true);
        $this->filteredLawyers = $this->lawyers;
    }

    public function filterBySpecialty($specialty)
    {
        $this->selectedSpecialty = $specialty;
        if ($specialty === 'Semua') {
            $this->filteredLawyers = $this->lawyers;
        } else {
            $this->filteredLawyers = array_filter($this->lawyers, function ($lawyer) use ($specialty) {
                $specialtyField = is_array($lawyer['keahlian']) ? implode(', ', $lawyer['keahlian']) : $lawyer['keahlian'];
                return stripos($specialtyField, $specialty) !== false;
            });
        }
    }

    public function getImageUrl($lawyer)
    {
        // Fetch a random image URL from Unsplash
        $uniqueIdentifier = urlencode($lawyer);
        return "https://source.unsplash.com/random/900x700/?profile,$uniqueIdentifier";
    }

    public function render()
    {
        // Convert specialties to string if they are arrays
        foreach ($this->filteredLawyers as &$lawyer) {
            if (is_array($lawyer['keahlian'])) {
                $lawyer['keahlian'] = implode(', ', $lawyer['keahlian']);
            }
            // Set the image URL for each lawyer
            $lawyer['img'] = $this->getImageUrl($lawyer['nama']);
        }

        return view('livewire.lawyer-list', [
            'filteredLawyers' => $this->filteredLawyers,
        ]);
    }
}
