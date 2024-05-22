@props([
    'img' => 'assets/img/lawyer.png', 
    'name' => 'Ahay', 
    'specialties' => 'Perceraian',
    'experience' => '5 Tahun', 
    ])

<div>
    <div class="p-6">
        <a href="#">
            <img class="rounded-lg" src="{{ asset($img) }}" alt="" />
        </a>
    </div>
    <div class="px-6 pb-6">
        <div class="mb-3 flex flex-wrap md:flex-nowrap gap-3 md:gap-0">
            <span
                class="bg-primary bg-opacity-10 md:grow text-center text-primary text-sm font-medium me-2 px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">{{ $specialties }}</span>
            <span
                class="bg-primary bg-opacity-10 md:grow text-center text-primary text-sm font-medium me-2 px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">{{ $specialties }}</span>
            <span
                class="bg-primary bg-opacity-10 md:grow text-center text-primary text-sm font-medium me-2 px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">{{ $specialties }}</span>
        </div>
        <a href="#">
            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $name }}</h5>
        </a>
        <p class="mb-3 font-normal text-secondary dark:text-gray-400">Pengalaman {{ $experience }}</p>
        <a href="#"
            class="w-full inline-flex items-center px-3 py-3 text-sm font-medium justify-center text-white bg-primary rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Konsultasi Sekarang
        </a>
    </div>
</div>
