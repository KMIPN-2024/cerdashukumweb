<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;



class BantuanHukum extends Component
{
    public $input;
    public $response_pasal;
    public $step;
    public $activeAccordionIndex = null;
    public $loading = false;

    // Atur aturan validasi untuk input
    protected $rules = [
        'input' => 'required|string|min_words:50|max_words:250', // Minimal 50 kata, maksimal 250 kata
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

        // // Fetch data from the API
        // $getPasal = Http::timeout(60)->post('https://cerdashukumapi-ktmv6bjp4q-as.a.run.app/get-pasal', [
        //     'sentence' => $this->input,
        //     'returnPasal' => true,
        // ]);
        // $response = $getPasal->json();

        // $this->response = [];

        // // Iterate over each element in the response and add it to $this->response
        // foreach ($response['data'] as $item) {
        //     // Merge 'score' into 'payload' array
        //     if ($item['score'] > 0.60) {
        //         $item['payload']['score'] = $item['score'];
        //         $this->response[] = $item['payload'];
        //     }
        // }
        
        // Fetch data from the API
        $getPasal = Http::timeout(60)->post('http://api.cerdashukum.com:8080/rekomendasi-pasal', [
            'sentence' => $this->input,
        ]);
        $response = json_decode($getPasal, true);
        $markdown = Str::markdown($response['response']);
        $this->response_pasal = str_replace(['\n', '\n*', '\n\n*', '\n\n'], ['<br>'], $markdown);

        $this->langkahHukum();
        $this->loading = false;
        // Check if no items were added to the response
        if (empty($this->response_pasal)) {
            $this->dispatch('noDataFound'); // Emit event to indicate no data found
        } else {
            return $this->response_pasal;
        }
    }

    public function langkahHukum()
    {
        // $getStep = Http::timeout(60)->post('http://api.cerdashukum.com:8080/langkah-hukum', [
        //     'sentence' => $this->input,
        // ]);
        $getStep = Http::timeout(60)->post('http://api.cerdashukum.com:8080/langkah-hukum', [
            'sentence' => $this->input,
        ]);
        $response_langkah = json_decode($getStep, true);
        $markdown_langkah = Str::markdown($response_langkah['response']);
        $this->step = str_replace(['\n', '\n*', '\n\n*', '\n\n'], ['<br>', '<br>', '<br><br>', '<br><br>'], $markdown_langkah);

        // $this->step = Str::markdown($getStep->body());
        // $this->step = str_replace(
        //     [
        //         '<p><strong>', // Ini harus diubah terlebih dahulu untuk mencegah konflik dengan <p> dan <strong>
        //         '</strong></p>', // Ini harus diubah terlebih dahulu untuk mencegah konflik dengan </p> dan </strong>
        //         '<p>',
        //         '</p>',
        //         '<ul>',
        //         '<ol>',
        //         '<li>'
        //     ],
        //     [
        //         '<h2 class="mt-4 mb-1 text-lg font-semibold text-gray-900 dark:text-gray-300">', // Pengganti untuk <p><strong>
        //         '</h2>', // Pengganti untuk </strong></p>
        //         '<p class="mt-4 mb-1 text-xl font-normal text-gray-900 dark:text-gray-300 space-y-4">', // Pengganti untuk <p>
        //         '</h2>', // Pengganti untuk </p>
        //         '<ul class="pl-5">', // Pengganti untuk <ul>
        //         '<ol class="list-decimal pl-5">', // Pengganti untuk <ol>
        //         '<li class="pl-5">' // Pengganti untuk <li>
        //     ],
        //     $this->step
        // );

    }
}
