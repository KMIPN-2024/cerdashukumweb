@props([
    'id' => 1,
    'img' => 'assets/img/lawyer.png',
    'name' => 'Ahay',
    'specialties' => ['Perceraian'],
    'location' => 'Banjarmasin Utara',
])

@php
    // Mengonversi jalur dari 'assets/img/...' menjadi 'storage/assets/img/...'
    $imgPath = str_replace('assets/img/', 'storage/assets/img/', $img);
@endphp

<div>
    <div class="p-0 md:p-6 flex justify-center items-center">
        <a href="#" class="block w-[400px] h-[200px] overflow-hidden rounded-lg">
            <img class="w-full h-full object-cover" src="{{ asset($imgPath) }}" alt="{{ $name }}" />
        </a>
    </div>
    <div class="px-2 pt-3 md:px-6 pb-6">
        <div class="mb-3 flex flex-nowrap md:flex-wrap gap-3 md:gap-2 truncate">
            @foreach ($specialties as $specialty)
                <span
                    class="bg-primary bg-opacity-10 text-center text-primary text-sm font-medium px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">
                    {{ $specialty->keahlian }}
                </span>
            @endforeach
        </div>
        <a href="#">
            <h5 class="mb-1 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white truncate">
                {{ $name }}
            </h5>
        </a>
        <p class="mb-3 font-normal text-sm truncate md:text-base text-secondary dark:text-gray-400">{{ $location }}
        </p>
        <div class="flex gap-3">
            <a href="#"
            class="w-full inline-flex items-center px-1.5 py-3 text-sm font-medium text-center justify-center text-white bg-primary rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Konsultasi Sekarang
            </a>
            <a href="{{ route('pengacara.show', $id) }}"
                class="w-full inline-flex items-center px-1.5 py-3 text-sm font-medium text-center justify-center text-primary hover:text-blue-950 hover:border-blue-950 border-primary bg-transparent rounded-lg hover:bg-border border focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 dark:text-white dark:hover:text-white">
                Detail
            </a>
        </div>
    </div>
</div>
