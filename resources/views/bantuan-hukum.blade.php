<x-app-layout>
    <livewire:bantuan-hukum>

        {{-- Section Rekomendasi Pengacara --}}
        <div class="p-6 md:p-12">
            {{-- Title --}}
            <div class="flex flex-col items-center justify-center gap-y-5 text-center text-primary pb-8 md:pb-16">
                <p class="font-semibold text-base">Kumpulan Pengacara Hukum</p>
                <h1 class="font-inter font-semibold text-2xl md:text-4xl">Ratusan Pengacara Tepercaya <br> Siap Membantu
                    Anda</h1>
            </div>
            {{-- End Title --}}

            {{-- Card Pengacara --}}
            <div class="flex flex-col md:flex-row flex-wrap  gap-6 justify-center">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg dark:bg-[#15152C] shadow-md shadow-blue-100">
                    <div class="p-6">
                        <a href="#">
                            <img class="rounded-lg" src="{{ asset('assets/img/lawyer.png') }}" alt="" />
                        </a>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="mb-3 flex flex-wrap md:flex-nowrap gap-3 md:gap-0">
                            <span
                                class="bg-primary bg-opacity-10 md:grow text-center text-primary text-sm font-medium me-2 px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">Sengketa</span>
                            <span
                                class="bg-primary bg-opacity-10 md:grow text-center text-primary text-sm font-medium me-2 px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">Perkawinan</span>
                            <span
                                class="bg-primary bg-opacity-10 md:grow text-center text-primary text-sm font-medium me-2 px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">Perjanjian</span>
                        </div>
                        <a href="#">
                            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">M.
                                Sohiburroihan Akbar</h5>
                        </a>
                        <p class="mb-3 font-normal text-secondary dark:text-gray-400">Pengalaman 33 Tahun</p>
                        <a href="#"
                            class="w-full inline-flex items-center px-3 py-3 text-sm font-medium justify-center text-white bg-primary rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg dark:bg-[#15152C] shadow-md shadow-blue-100">
                    <div class="p-6">
                        <a href="#">
                            <img class="rounded-lg" src="{{ asset('assets/img/lawyer.png') }}" alt="" />
                        </a>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="mb-3 flex flex-wrap md:flex-nowrap gap-3 md:gap-0">
                            <span
                                class="bg-primary bg-opacity-10 md:grow text-center text-primary text-sm font-medium me-2 px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">Sengketa</span>
                            <span
                                class="bg-primary bg-opacity-10 md:grow text-center text-primary text-sm font-medium me-2 px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">Perkawinan</span>
                            <span
                                class="bg-primary bg-opacity-10 md:grow text-center text-primary text-sm font-medium me-2 px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">Perjanjian</span>
                        </div>
                        <a href="#">
                            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">M.
                                Sohiburroihan Akbar</h5>
                        </a>
                        <p class="mb-3 font-normal text-secondary dark:text-gray-400">Pengalaman 33 Tahun</p>
                        <a href="#"
                            class="w-full inline-flex items-center px-3 py-3 text-sm font-medium justify-center text-white bg-primary rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg dark:bg-[#15152C] shadow-md shadow-blue-100">
                    <div class="p-6">
                        <a href="#">
                            <img class="rounded-lg" src="{{ asset('assets/img/lawyer.png') }}" alt="" />
                        </a>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="mb-3 flex flex-wrap md:flex-nowrap gap-3 md:gap-0">
                            <span
                                class="bg-primary bg-opacity-10 md:grow text-center text-primary text-sm font-medium me-2 px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">Sengketa</span>
                            <span
                                class="bg-primary bg-opacity-10 md:grow text-center text-primary text-sm font-medium me-2 px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">Perkawinan</span>
                            <span
                                class="bg-primary bg-opacity-10 md:grow text-center text-primary text-sm font-medium me-2 px-4 py-1 rounded-lg dark:bg-blue-900 dark:text-blue-300">Perjanjian</span>
                        </div>
                        <a href="#">
                            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">M.
                                Sohiburroihan Akbar</h5>
                        </a>
                        <p class="mb-3 font-normal text-secondary dark:text-gray-400">Pengalaman 33 Tahun</p>
                        <a href="#"
                            class="w-full inline-flex items-center px-3 py-3 text-sm font-medium justify-center text-white bg-primary rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>
            </div>
            {{-- End Card Pengacara --}}
        </div>
        {{-- End Section Rekomendasi Pengacara --}}

        {{-- Section FAQ --}}
        <div class="flex flex-col items-center h-fit mx-5">
            <div>
                <p class="text-primary text-xs md:text-base text-center font-semibold tracking-widest mb-1">
                    CerdasHukum
                </p>
                <h4 class="text-2xl md:text-4xl text-primary font-bold text-center">
                    Frequently Asked Questions
                </h4>
            </div>

            <x-faq-list />

        </div>
        {{-- End Section FAQ --}}

        @push('addon-script')
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {

                    Swal.fire({
                        title: 'Perhatian!',
                        html: `
                <div style="text-align: justify;">
                    1. Fitur ini hanya memberikan informasi mengenai pasal yang sesuai dalam Kitab Undang-Undang Hukum Perdata (Burgelik Wetboek/BW).<br>
                    2. Pemahaman dan interpretasi terhadap pasal yang dihasilkan sistem sepenuhnya merupakan tanggung jawab pengguna.<br>
                    3. Informasi yang diberikan tidak dimaksudkan sebagai pengganti nasihat atau konsultasi hukum profesional.<br><br>
                    <span style="display: block; text-align: center; font-weight: bold;">
                        Disarankan untuk selalu berkonsultasi dengan ahli hukum untuk mendapatkan informasi yang lebih akurat dan terperinci.
                    </span>
                </div>
            `,
                        confirmButtonText: 'Saya Mengerti',
                    });
                });
            </script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const accordions = document.querySelectorAll('[data-accordion="collapse2"]');

                    accordions.forEach(function(accordion) {
                        const button = accordion.querySelector('button');
                        const target = accordion.querySelector(button.getAttribute('data-accordion-target'));

                        button.addEventListener('click', function() {
                            const expanded = button.getAttribute('aria-expanded') === 'true' || false;

                            // Tutup semua akordeon yang tidak sedang diklik
                            accordions.forEach(function(otherAccordion) {
                                const otherButton = otherAccordion.querySelector('button');
                                const otherTarget = otherAccordion.querySelector(otherButton
                                    .getAttribute('data-accordion-target'));

                                if (accordion !== otherAccordion) {
                                    otherButton.setAttribute('aria-expanded', 'false');
                                    otherTarget.classList.add('hidden');
                                }
                            });

                            button.setAttribute('aria-expanded', !expanded);
                            target.classList.toggle('hidden');
                        });
                    });
                });
            </script>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Livewire.on('responseReceived', () => {
                        // Hide the spinner when response is received
                        document.querySelector('.putarputar').classList.add('hidden');
                    });
                });
            </script>

            <script>
                function getLocation() {
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(showPosition);
                    } else {
                        alert("Geolocation is not supported by this browser.");
                    }
                }

                function showPosition(position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;
                    console.log(latitude)
                }

                document.addEventListener('DOMContentLoaded', (event) => {});
                getLocation();
            </script>
        @endpush
</x-app-layout>
