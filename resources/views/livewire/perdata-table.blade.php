<div>
    <div class="flex justify-between items-center mb-4">
        <div class="flex gap-3">
            <div>
                <input wire:model.live.debounce.300ms="search" type="text" placeholder="Search..."
                    class="px-4 py-2 border rounded-lg shadow-sm" />
            </div>
            <div>
                <select wire:model.live="filterBab" wire:change="resetPage" class="px-4 py-2 border rounded-lg shadow-sm max-w-xs">
                    <option value="">Semua Bab</option>
                    @foreach (collect($data)->pluck('Bab')->unique() as $bab)
                        <option value="{{ $bab }}">{{ $bab }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <select wire:model="filterBagian" wire:change="resetPage" class="px-4 py-2 border rounded-lg shadow-sm max-w-xs">
                    <option value="">Semua Bagian</option>
                    @foreach (collect($data)->pluck('Bagian')->unique() as $bagian)
                        <option value="{{ $bagian }}">{{ $bagian }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div>
            <select wire:model="perPage" wire:change="resetPage" class="px-4 py-2 border rounded-lg shadow-sm">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
    </div>

    <div style="width: 100%" class="overflow-x-auto shadow-md sm:rounded-lg">
        <table id="example1" class="text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-2 py-3">Nomor</th>
                    <th scope="col" class="px-6 py-3">Pasal</th>
                    <th scope="col" class="px-6 py-3">Isi</th>
                    <th scope="col" class="px-6 py-3">Buku</th>
                    <th scope="col" class="px-6 py-3">Bab</th>
                    <th scope="col" class="px-6 py-3">Bagian</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($perdatas as $index => $perdata)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration + ($page - 1) * $perPage }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $perdata['Pasal'] }}
                        </td>
                        <td class="px-6 py-4">{{ $perdata['Isi'] }}</td>
                        <td class="px-6 py-4">{{ $perdata['Buku'] }}</td>
                        <td class="px-6 py-4">{{ $perdata['Bab'] }}</td>
                        <td class="px-6 py-4">{{ $perdata['Bagian'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        @if ($total > $perPage)
            <button wire:click="previousPage" class="px-4 py-2 mr-2 bg-gray-800 text-white rounded">Previous</button>
            <button wire:click="nextPage" class="px-4 py-2 bg-gray-800 text-white rounded">Next</button>
        @endif
    </div>
</div>
