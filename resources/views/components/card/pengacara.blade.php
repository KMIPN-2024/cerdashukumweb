@props([
    'img' => 'assets/img/lawyer.png', 
    'name' => 'Ahay', 
    'specialties' => 'Perceraian',
    'experience' => '5 Tahun', 
    ])

<div>
    <div class="p-0 md:p-6">
        <a href="#">
            <img class="rounded-lg" src="{{ asset($img) }}" alt="" />
        </a>
    </div>
    <div class="px-2 pt-3 md:px-6 pb-6">
        <div class="mb-3 flex flex-nowrap md:flex-wrap gap-3 md:gap-2 truncate">
            <span
                class="bg-primary bg-opacity-10 text-center text-primary text-sm font-medium px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">{{ $specialties }}</span>
        </div>
        <a href="#">
            <h5 class="mb-1 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white truncate">{{ $name }}</h5>
        </a>
        <p class="mb-3 font-normal text-sm md:text-base text-secondary dark:text-gray-400">{{ $experience }}</p>
        <a href="#"
            class="w-full inline-flex items-center px-2 py-3 text-sm font-medium text-center justify-center text-white bg-primary rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Konsultasi Sekarang
        </a>
    </div>
</div>
