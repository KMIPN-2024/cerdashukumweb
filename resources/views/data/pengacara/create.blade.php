<x-app-layout>
    @push('addon-css')
    @endpush
    <section id="pengacara">
        @if (session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: '{{ session('error') }}',
                });
            </script>
        @endif

        @if ($errors->any())
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    html: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
                });
            </script>
        @endif
        <div class="p-6 md:p-12">
            <div class="p-10">
                <h1 class="mb-8 font-extrabold text-4xl dark:text-white">Daftar Sebagai Kontributor</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <form method="POST" action="{{ route('daftar.pengacara') }}" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium leading-5  text-gray-700 dark:text-white">Nama
                                Lengkap</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="name" name="nama" placeholder="John Doe" type="text"
                                    required=""
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                <div
                                    class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <label for="no_hp" class="block text-sm font-medium leading-5 text-gray-700 dark:text-white" >Nomor
                                HP/WA</label>
                            <div class="mt-1 flex rounded-md shadow-sm">

                                <span
                                    class="inline-flex h-10 items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                    +62
                                </span>
                                <input id="no_hp" name="no_hp" placeholder="8xx-xxxx-xxxx" type="text"
                                    required=""
                                    class="flex-1 form-input pl-3 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5 ">
                            </div>
                        </div>

                        <div class="mt-6">
                            <label for="alamat" class="block text-sm font-medium leading-5  text-gray-700 dark:text-white">
                                Alamat
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="alamat" name="alamat" placeholder="Jl. Padat Karya" type="text"
                                    required=""
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                <div
                                    class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="lokasi" class="block text-sm font-medium leading-5  text-gray-700 dark:text-white">
                                Lokasi (Latitude, Longitude)
                            </label>
                            <div class="flex flex-row gap-x-3 mt-1 relative rounded-md shadow-sm">
                                <input id="latitude" name="latitude" placeholder="-3.3150282857767372" type="text"
                                    required=""
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                <div
                                    class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input id="longitude" name="longitude" placeholder="114.59254545318201" type="text"
                                    required=""
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                <div
                                    class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-6">
                                <span class="block w-full rounded-md shadow-sm">
                                    <button type="button" id="get-location" onclick="getLocation()"
                                        class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                        Dapatkan Lokasi Saat Ini
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="profile" class="block text-sm font-medium leading-5  text-gray-700 dark:text-white">
                                Foto Profil
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="profile" name="foto" type="file"
                                    class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-teal-500 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />

                                <div
                                    class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="keahlian" class="block text-sm font-medium leading-5  text-gray-700 dark:text-white">
                                Keahlian
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="keahlian" name="keahlian" placeholder="Kontrak" type="text"
                                    required="" 
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                <div
                                    class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="password_confirmation"
                                class="block text-sm font-medium leading-5 text-gray-700 dark:text-white" >
                                Tentang Anda
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <textarea rows="10" name="deskripsi" placeholder="Deskripsi tentang anda, pengalaman, dan apa yang bisa anda bantu."
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-8">
                            <div class="mt-6">
                                <span class="block w-full rounded-md shadow-sm">
                                    <button type="submit"
                                        class="w-full flex justify-center py-2.5 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                        Daftarkan Diri Sekarang
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>

                    <aside class="">
                        <div class="bg-gray-100 dark:text-black p-8 rounded">
                            <h2 class="font-bold text-2xl">Instructions</h2>
                            <ul class="list-disc mt-4 list-inside">
                                <li>Masukkan alamat yang terdaftar di Google Maps</li>
                                <li>Jika posisi anda saat ini sama dengan lokasi kantor hukum anda, tekan "Dapatkan
                                    Lokasi Sekarang"</li>
                                <li>Jika posisi yang didapat tidak akurat, anda bisa menggeser marker yang tersedia pada
                                    maps dibawah</li>
                            </ul>

                            <div id="map" class="mt-6" style="height: 400px; width: 100%;"></div>
                        </div>
                    </aside>

                </div>
            </div>
        </div>
    </section>

    @push('addon-script')
        <script async
            src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.maps_api_key') }}&loading=async&libraries=places&callback=initMap">
        </script>
        <script>
            let map;
            let marker;
            let autocomplete;

            function initMap() {
                const initialPosition = {
                    lat: -3.3150282857767372,
                    lng: 114.59254545318201
                };
                map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 15,
                    center: initialPosition,
                });

                marker = new google.maps.Marker({
                    position: initialPosition,
                    map: map,
                    draggable: true,
                    title: "Your Location",
                });

                // Update position when marker is dragged
                google.maps.event.addListener(marker, 'dragend', function() {
                    const position = marker.getPosition();
                    updatePosition(position.lat(), position.lng());
                });

                // Initialize autocomplete
                const input = document.getElementById('alamat');
                autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.bindTo('bounds', map);

                autocomplete.addListener('place_changed', function() {
                    const place = autocomplete.getPlace();

                    if (!place.geometry) {
                        alert("No details available for input: '" + place.name + "'");
                        return;
                    }

                    // If the place has a geometry, then present it on a map.
                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(17);
                    }

                    marker.setPosition(place.geometry.location);
                    updatePosition(place.geometry.location.lat(), place.geometry.location.lng());
                });
            }

            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    alert("Geolocation is not supported by this browser.");
                }
            }

            function showPosition(position) {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;

                document.getElementById("latitude").value = latitude;
                document.getElementById("longitude").value = longitude;

                const userLocation = {
                    lat: latitude,
                    lng: longitude
                };

                marker.setPosition(userLocation);
                map.setCenter(userLocation);
                updatePosition(latitude, longitude);
            }

            function updatePosition(lat, lng) {
                document.getElementById("latitude").value = lat;
                document.getElementById("longitude").value = lng;

                // Use Geocoding API to get address
                const geocoder = new google.maps.Geocoder();
                const latlng = {
                    lat: parseFloat(lat),
                    lng: parseFloat(lng)
                };
                geocoder.geocode({
                    location: latlng
                }, (results, status) => {
                    if (status === "OK") {
                        if (results[0]) {
                            document.getElementById("alamat").value = results[0].formatted_address;
                        } else {
                            alert("No results found");
                        }
                    } else {
                        alert("Geocoder failed due to: " + status);
                    }
                });
            }

            window.initMap = initMap;
        </script>
    @endpush

</x-app-layout>
