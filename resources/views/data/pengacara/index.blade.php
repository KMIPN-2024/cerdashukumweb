<x-app-layout>
    @push('addon-css')
    @endpush
    <section id="pengacara">
        <div class="p-6 md:p-12">
            <x-text.title title="Temukan Pengacara Tepercaya <br> Disekitar Anda" class="pb-4  md:pb-3" />
            <livewire:lawyer-list/>
        </div>
    </section>

    @push('addon-script')
        {{-- <script>
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
                console.log("Latitude: " + latitude + " Longitude: " + longitude);
                Livewire.dispatch('userLocation', latitude, longitude);

                // Panggil fungsi untuk mengurutkan pengacara berdasarkan jarak setelah mendapatkan lokasi pengguna
                // sortLawyersByDistance();
            }

            document.addEventListener('DOMContentLoaded', (event) => {
                getLocation();
            });
        </script> --}}
    @endpush

</x-app-layout>
