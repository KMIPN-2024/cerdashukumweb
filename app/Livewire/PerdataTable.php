<?php

namespace App\Livewire;

use League\Csv\Reader;
use Livewire\Component;
use Livewire\WithPagination;

class PerdataTable extends Component
{
    // public function render()
    // {
    //     return view('livewire.perdata-table');
    // }
    use WithPagination;

    public $search = '';
    public $filterBab = '';
    public $filterBagian = '';
    public $perPage = 10;
    public $data = [];
    public $page = 1;
    public $total;


    public function mount()
    {
        // Fetch and initialize data
        $this->fetchData();
    }

    public function fetchData()
    {
        // $csvUrl = 'https://raw.githubusercontent.com/roihan365/punyadataku/main/final_dataset.csv';
        $csvFile = public_path('final_dataset.csv');

        // Download CSV file from URL
        // file_put_contents($csvFile, file_get_contents($csvUrl));

        // Read CSV file
        $csv = Reader::createFromPath($csvFile, 'r');
        $csv->setHeaderOffset(0);

        $this->data = [];
        foreach ($csv as $record) {
            $this->data[] = $record;
        }

        // Calculate total count
        $this->total = count($this->data);
    }

    public function updatingSearch()
    {
        // Don't reset page when search is updated
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        // Reset page only when perPage is updated
        $this->resetPage();
    }

    public function resetPage()
    {
        $this->page = 1;
    }

    public function render()
    {
        // Filter data based on search and filter
        $filteredData = collect($this->data)
            ->filter(function ($item) {
                return strpos(strtolower($item['Isi']), strtolower($this->search)) !== false;
            });

        // Tambahkan filter untuk Bab
        if ($this->filterBab) {
            $filteredData = $filteredData->filter(function ($item) {
                return $item['Bab'] == $this->filterBab;
            });
        }
        // Tambahkan filter untuk Bagian
        if ($this->filterBagian) {
            $filteredData = $filteredData->filter(function ($item) {
                return $item['Bagian'] == $this->filterBagian;
            });
        }

        // Paginate the filtered data
        $paginatedData = $filteredData->forPage($this->page, $this->perPage)->values();

        return view('livewire.perdata-table', [
            'perdatas' => $paginatedData,
            'total' => $this->total,
        ]);
    }

    public function previousPage()
    {
        if ($this->page > 1) {
            $this->page--;
        }
    }

    public function nextPage()
    {
        if (($this->page * $this->perPage) < $this->total) {
            $this->page++;
        }
    }
}
