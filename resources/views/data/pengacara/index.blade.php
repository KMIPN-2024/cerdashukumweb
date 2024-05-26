<x-app-layout>
    @push('addon-css')
    @endpush
    <section id="pengacara">
        <div class="p-6 md:p-12">
            <x-text.title title="Temukan Pengacara Tepercaya <br> Disekitar Anda" class="pb-4  md:pb-3" />
            <livewire:lawyer-list />
        </div>
    </section>

    @push('addon-script')
        {{-- <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQB3o1zDyyD2GhVCvW9faesL0IQaIe5CU&loading=async&callback=initMap">
        </script> --}}
        <script>
            // function initMap(latitude, longitude, kecamatan) {
            //     var userLocation = {
            //         lat: latitude,
            //         lng: longitude
            //     };

            //     var map = new google.maps.Map(document.getElementById('map'), {
            //         zoom: 14,
            //         center: userLocation
            //     });

            //     var marker = new google.maps.Marker({
            //         position: userLocation,
            //         map: map,
            //         title: 'Your Location'
            //     });

            //     if (kecamatan) {
            //         var infowindow = new google.maps.InfoWindow({
            //             content: 'Kecamatan: ' + kecamatan
            //         });

            //         marker.addListener('click', function() {
            //             infowindow.open(map, marker);
            //         });
            //     }
            // }

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

                fetch('/get-location', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            latitude: latitude,
                            longitude: longitude
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                    })
                    .catch(error => console.error('Error:', error));
            }

            document.addEventListener('DOMContentLoaded', (event) => {});
            getLocation();
        </script>
    @endpush

</x-app-layout>
