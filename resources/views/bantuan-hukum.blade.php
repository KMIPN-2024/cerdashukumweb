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
            <div class="grid grid-cols-1 gap-4 md:grid-cols-4">
                @forelse ($lawyers as $lawyer)
                    <x-card.card>
                        <x-card.pengacara img="{{ $lawyer->foto }}" name="{{ $lawyer->nama }}" :specialties="$lawyer->keahlian"
                            location="{{ $lawyer->alamat }}" id="{{ $lawyer->id }}" />
                    </x-card.card>
                @empty
                    <h1 class="dark:text-gray-400">Tidak ada pengacara</h1>
                @endforelse
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

                Livewire.on('noDataFound', () => {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Tidak Ada Pasal yang Ditemukan',
                        text: 'Tidak ada pasal dengan tingkat kemiripan di atas 55% yang ditemukan.',
                        confirmButtonText: 'OK'
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
