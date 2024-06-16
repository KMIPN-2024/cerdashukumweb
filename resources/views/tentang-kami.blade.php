<x-app-layout>
    <div class="p-6 md:p-12 dark:text-gray-400">
        {{-- Title --}}
        <div class="flex flex-col items-center justify-center gap-y-5 text-center text-primary pb-8 md:pb-10">
            <p class="font-semibold text-base">Tentang Kami</p>
            <h1 class="font-inter font-semibold text-2xl md:text-4xl">CerdasHukum Solusi Pertolongan Pertama Perdata</h1>
        </div>
        {{-- End Title --}}

        <div class="grid grid-rows-2 md:grid-rows-1 md:grid-cols-2 gap-y-5 md:gap-y-0 md:gap-x-14 pb-5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, deleniti non sequi nesciunt esse, laboriosam ipsam maxime doloribus a consequatur suscipit placeat deserunt labore! Nobis, est cupiditate animi, iure laboriosam quae ullam tenetur adipisci atque modi laudantium inventore similique placeat voluptatum, itaque incidunt repellat esse corrupti natus. Consequuntur, omnis quibusdam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, deleniti non sequi nesciunt esse, laboriosam ipsam maxime doloribus a consequatur suscipit placeat deserunt labore! Nobis, est cupiditate animi, iure laboriosam quae ullam tenetur adipisci atque modi laudantium inventore similique placeat voluptatum, itaque incidunt repellat esse corrupti natus. Consequuntur, omnis quibusdam.</p>
        </div>

        <x-text.title subtitle="Tim CerdasHukum" class="pt-12 md:pt-6" />

        <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
            <div class="relative " data-sr-id="9"
                style="visibility: visible; opacity: 1; transition: opacity 2.8s cubic-bezier(0.5, 0, 0, 1) 0s, transform 2.8s cubic-bezier(0.5, 0, 0, 1) 0s;">
                <img src="{{ asset('assets/img/msohiburroihanakbar.png') }}" alt=""
                    class="h-[243px] md:h-[263px] object-cover rounded-md bg-[#0A30B7]">

                <div class="absolute bottom-0 left-0 p-4">
                    <h3 class="text-white font-semibold text-lg">M. Sohiburroihan Akbar</h3>
                    <p class="text-white text-sm">Web Developer</p>
                    <a class="text-white text-xs" href="">@ahayyy_</a>
                </div>
            </div>
            <div class="relative " data-sr-id="9"
                style="visibility: visible; opacity: 1; transition: opacity 2.8s cubic-bezier(0.5, 0, 0, 1) 0s, transform 2.8s cubic-bezier(0.5, 0, 0, 1) 0s;">
                <img src="{{ asset('assets/img/nida.png') }}" alt=""
                    class="h-[243px] md:h-[263px] object-cover rounded-md bg-[#0A30B7]">

                <div class="absolute bottom-0 left-0 p-4">
                    <h3 class="text-white font-semibold text-lg">Nida'an Khafiyya</h3>
                    <p class="text-white text-sm">Cloud Computing</p>
                    <a class="text-white text-xs" href="">@needkh_</a>
                </div>
            </div>
            <div class="relative " data-sr-id="9"
                style="visibility: visible; opacity: 1; transition: opacity 2.8s cubic-bezier(0.5, 0, 0, 1) 0s, transform 2.8s cubic-bezier(0.5, 0, 0, 1) 0s;">
                <img src="{{ asset('assets/img/landi.png') }}" alt=""
                    class="h-[243px] md:h-[263px] object-cover rounded-md bg-[#0A30B7]">

                <div class="absolute bottom-0 left-0 p-4">
                    <h3 class="text-white font-semibold text-lg">M. Hollandi Sumari</h3>
                    <p class="text-white text-sm">Machine Learning</p>
                    <a class="text-white text-xs" href="">@landi.sumari_</a>
                </div>
            </div>
        </div>


    </div>

    @push('addon-script')
    @endpush
</x-app-layout>
