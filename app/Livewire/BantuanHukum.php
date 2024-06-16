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

    // Atur aturan validasi untuk input
    protected $rules = [
        'input' => 'required|string|min_words:10|max_words:250', // Minimal 50 kata, maksimal 250 kata
    ];
    protected $messages = [
        'input.required' => 'Masukkan cerita permasalahan hukum perdata Anda.',
        'input.string' => 'Input harus berupa teks.',
        'input.min_words' => 'Cerita permasalahan hukum perdata minimal 50 kata.',
        'input.max_words' => 'Cerita permasalahan hukum perdata maksimal 250 kata.',
    ];

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
        $this->validate(); // Jalankan validasi
        $this->loading = true;

        // Fetch data from the API
        $getPasal = Http::timeout(60)->withoutVerifying()->post('https://cerdashukumapi-ktmv6bjp4q-as.a.run.app/get-pasal', [
            'sentence' => $this->input,
            'returnPasal' => true,
        ]);
        $response = $getPasal->json();

        $this->response = [];

        // Iterate over each element in the response and add it to $this->response
        foreach ($response['data'] as $item) {
            // Merge 'score' into 'payload' array
            if ($item['score'] > 0.55) {
                $item['payload']['score'] = $item['score'];
                $this->response[] = $item['payload'];
            }
        }

        $this->loading = false;
        // Check if no items were added to the response
        if (empty($this->response)) {
            $this->dispatch('noDataFound'); // Emit event to indicate no data found
        } else {
            return $this->response;
        }
    }
}
