<div>
    <div class="w-full mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap justify-center -mb-px text-sm font-medium text-center" role="tablist">
            <li class="me-2" role="presentation">
                <button wire:click="filterBySpecialty('Semua')"
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:bg-white rounded-md {{ $selectedSpecialty === 'Semua' ? 'border-blue-500 text-blue-600' : '' }}">
                    Semua
                </button>
            </li>
            <li class="me-2" role="presentation">
                <button wire:click="filterBySpecialty('Kontrak')"
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:bg-white rounded-md {{ $selectedSpecialty === 'Kontrak' ? 'border-blue-500 text-blue-600' : '' }}">
                    Kontrak
                </button>
            </li>
            <li class="me-2" role="presentation">
                <button wire:click="filterBySpecialty('Keluarga')"
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:bg-white rounded-md {{ $selectedSpecialty === 'Keluarga' ? 'border-blue-500 text-blue-600' : '' }}">
                    Keluarga
                </button>
            </li>
            <li class="me-2" role="presentation">
                <button wire:click="filterBySpecialty('Waris')"
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:bg-white rounded-md {{ $selectedSpecialty === 'Waris' ? 'border-blue-500 text-blue-600' : '' }}">
                    Waris
                </button>
            </li>
            <li class="me-2" role="presentation">
                <button wire:click="filterBySpecialty('Properti')"
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:bg-white rounded-md {{ $selectedSpecialty === 'Properti' ? 'border-blue-500 text-blue-600' : '' }}">
                    Properti
                </button>
            </li>
        </ul>
    </div>
    <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
        @foreach ($filteredLawyers as $lawyer)
            <x-card.card>
                <x-card.pengacara img="{{ $lawyer['img'] }}" name="{{ $lawyer['nama'] }}"
                    specialties="{{ $lawyer['keahlian'] }}" experience="{{ $lawyer['lokasi'] }}" />
            </x-card.card>
        @endforeach
    </div>
</div>
