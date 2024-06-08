<x-app-layout>
    @push('addon-css')
    @endpush
    <section id="pengacara">
        <div class="p-6 md:p-12">
            <div class="bg-white">
                <div class="mx-auto px-4 py-8">
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full lg:w-2/4 px-4 mb-8 lg:mb-0">
                            <h1 class="text-3xl font-bold mb-4">Data Pengacara</h1>
                            <p class="text-red-500">Disclaimer!</p>
                            <p class="text-sm text-gray-500 mb-6">CerdasHukum hanya memberikan rekomendasi pengacara berdasarkan informasi yang tersedia dan relevan. Kami tidak bertanggung jawab atas segala kerugian, kerusakan, atau ketidakpuasan yang mungkin Anda alami dalam hubungan atau transaksi apa pun dengan pengacara yang direkomendasikan. Semua keputusan yang diambil berdasarkan rekomendasi kami sepenuhnya merupakan tanggung jawab pribadi Anda.</p>
                            <div class="mb-6">
                                <p class="text-xl font-bold mb-2">Pengalaman Menangani Kasus</p>
                                {{-- <p class="text-lg">Friday, April 15th at 8:00 PM</p> --}}
                                <div class="mb-3 flex flex-nowrap md:flex-wrap gap-3 md:gap-2 truncate">
                                    @foreach ($pengacara->keahlian as $specialty)
                                        <span
                                            class="bg-primary bg-opacity-10 text-center text-primary text-sm font-medium px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">
                                            {{ $specialty->keahlian }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="mb-6">
                                <p class="text-xl font-bold mb-2">Deskripsi</p>
                                <p class="text-lg">{{ $pengacara->deskripsi }}</p>
                            </div>
                        </div>
                        <div class="w-full lg:w-2/4 px-4">
                            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                                <div class="md:flex">
                                    <div class="md:shrink-0">
                                        <img class="h-48 w-full object-cover md:h-full md:w-48"
                                            src="{{ asset('/storage/' . $pengacara->foto) }}">
                                    </div>
                                    <div class="p-8">
                                        <div class="uppercase tracking-wide text-lg text-indigo-500 font-semibold">
                                            {{ $pengacara->nama }}
                                        </div>
                                        <p class="mt-2 text-slate-500">{{ $pengacara->alamat }}</p>
                                        <a href="https://wa.me/62{{ $pengacara->no_hp }}" target="_BLANK"
                                            class="inline-block mt-4 bg-primary hover:bg-blue-700 text-white py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                            Konsultasi Online (WA)
                                        </a>
                                        <a href="https://www.google.com/maps/dir/?api=1&destination={{ $pengacara->latitude }},{{ $pengacara->longitude }}" target="_BLANK"
                                            class="inline-block mt-4 bg-transparent border border-primary hover:bg-blue-700 text-primary hover:text-white py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                            Konsultasi Tatap Muka
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="bg-white">
                <div class="grid grid-cols-2">
                    <div class="w-full p-5">
                        <div class="flex justify-center mb-3">
                            <h1 class="text-center font-bold text-2xl">Data Pengacara</h1>
                        </div>
                        <p>{{ $pengacara->nama }}</p>
                        <p>{{ $pengacara->deskripsi }}</p>
                        <p class="font-bold text-lg my-3">Keahlian</p>
                        <div class="mb-3 flex flex-nowrap md:flex-wrap gap-3 md:gap-2 truncate">
                            @foreach ($pengacara->keahlian as $specialty)
                                <span
                                    class="bg-primary bg-opacity-10 text-center text-primary text-sm font-medium px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">
                                    {{ $specialty->keahlian }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="p-5 border">
                        <div class="grid grid-cols-2">
                            <div class="w-[200px] h-[250px] rounded-lg">
                                <img class="w-full h-full object-cover" src="{{ asset($pengacara->foto) }}"
                                    alt="{{ $pengacara->nama }}" />
                            </div>
                            <p class="mb-5">{{ $pengacara->alamat }}</p>
                        </div>

                        <a href="https://wa.me/62{{ $pengacara->no_hp }}"
                            class="w-full inline-flex items-center px-1.5 py-3 text-sm font-medium text-center justify-center text-white bg-primary rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    @push('addon-script')
    @endpush

</x-app-layout>
