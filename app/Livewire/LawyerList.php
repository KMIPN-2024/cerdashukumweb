<?php

namespace App\Livewire;

use App\Models\Keahlian;
use App\Models\Pengacara;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\On;
use Livewire\Component;

class LawyerList extends Component
{
    public $lawyers = [];
    public $filteredLawyers = [];
    public $selectedSpecialty = 'Semua';
    public $keahlian = [];

    public $userLatitude; // Latitude pengguna
    public $userLongitude; // Longitude pengguna

    public function mount()
    {
        // $json = file_get_contents(public_path('dummy-pengacara.json'));
        $data = Pengacara::all();
        $keahlians = Keahlian::all();

        $this->lawyers = $data;
        $this->keahlian = $keahlians;
        // $this->lawyers = json_decode($json, true);
        $this->filteredLawyers = $data;
        
    }

    // public function userLocation($location)
    // {
    //     $this->userLatitude = $location['latitude'];
    //     $this->userLongitude = $location['longitude'];

    //     logger('User location received: ' . $this->userLatitude . ', ' . $this->userLongitude);
    // }

    public function filterBySpecialty($specialty)
    {
        $this->selectedSpecialty = $specialty;
        if ($specialty === 'Semua') {
            $this->filteredLawyers = $this->lawyers;
        } else {
            // $this->filteredLawyers = array_filter($this->lawyers, function ($lawyer) use ($specialty) {
            //     $specialtyField = is_array($lawyer['keahlian']) ? implode(', ', $lawyer['keahlian']) : $lawyer['keahlian'];
            //     return stripos($specialtyField, $specialty) !== false;
            // });
            $this->filteredLawyers = $this->lawyers->filter(function ($lawyer) use ($specialty) {
                $specialties = $lawyer->keahlian->pluck('keahlian')->toArray();
                return in_array($specialty, $specialties);
            });
        }
    }

    // public function sortLawyersByDistance()
    // {
    //     // Hitung jarak antara pengguna dan setiap pengacara menggunakan Google Maps Distance Matrix API
    //     foreach ($this->filteredLawyers as $lawyer) {
    //         $distance = $this->getDistance($this->userLatitude, $this->userLongitude, $lawyer->latitude, $lawyer->longitude);
    //         $lawyer->distance = $distance;
    //     }

    //     // Urutkan pengacara berdasarkan jarak
    //     $this->filteredLawyers = $this->filteredLawyers->sortBy('distance');
    // }

    // public function getDistance($lat1, $lon1, $lat2, $lon2)
    // {
    //     // Kirim permintaan ke Google Maps Distance Matrix API
    //     $response = Http::withOptions(['verify' => false])->get('https://maps.googleapis.com/maps/api/distancematrix/json', [
    //         'units' => 'metric',
    //         'origins' => "$lat1,$lon1",
    //         'destinations' => "$lat2,$lon2",
    //         'key' => 'AIzaSyDQB3o1zDyyD2GhVCvW9faesL0IQaIe5CU', // Ganti dengan kunci API Google Maps Anda
    //     ]);
    //     // dd($response->json());

    //     // Ambil jarak dari respons API
    //     $distance = $response['rows'][0]['elements'][0]['distance']['value']; // Jarak dalam meter

    //     return $distance;
    // }


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
            if ($lawyer['foto'] == null) {
                $lawyer['foto'] = $this->getImageUrl($lawyer['nama']);
            }
        };

        return view('livewire.lawyer-list', [
            'filteredLawyers' => $this->filteredLawyers,
            'keahlians' => $this->keahlian
        ]);
    }
}
