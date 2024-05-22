<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class BantuanHukum extends Component
{
    public $input;
    public $response;
    public $activeAccordionIndex = null;
    public $loading = false;

    public function render()
    {
        return view('livewire.bantuan-hukum');
    }

    public function toggleAccordion($index)
    {
        if ($this->activeAccordionIndex === $index) {
            $this->activeAccordionIndex = null;
        } else {
            $this->activeAccordionIndex = $index;
        }
    }

    public function submitForm()
    {
        $this->loading = true;

        // Fetch data from the API
        $getPasal = Http::timeout(60)->post('http://127.0.0.1:8001/get-pasal', [
            'sentence' => $this->input,
            'returnPasal' => true,
        ]);
        $response = $getPasal->json();

        $this->response = [];

        // Iterate over each element in the response and add it to $this->response
        foreach ($response['data'] as $item) {
            // Merge 'score' into 'payload' array
            $item['payload']['score'] = $item['score'];
            $this->response[] = $item['payload'];
        }
        
        $this->loading = false;
        return $this->response;

        // Output the response for debugging
        dd($this->response);
    }
}
