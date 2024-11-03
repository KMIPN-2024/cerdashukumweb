<x-app-layout>
    <div class="p-6 dark:text-gray-400">
        {{-- Title --}}
        <div class="flex flex-col items-center justify-center gap-y-5 text-center text-textsecondary pb-8 md:pb-10">
            <p class="font-semibold text-base">Tentang Kami</p>
            <h1 class="font-inter font-semibold text-2xl md:text-4xl">CerdasHukum Solusi Pertolongan Pertama Perdata</h1>
        </div>
        {{-- End Title --}}

        <div
            class="grid grid-rows-1 justify-center md:grid-rows-1 md:grid-cols-1 gap-y-5 md:gap-y-0 md:gap-x-14 pb-10 max-w-4xl mx-auto md:bg-white md:p-12 md:rounded-xl md:shadow-xl">
            <p class="text-lg md:text-xl leading-relaxed text-gray-700">
                <strong>Kenalkan CERDASHUKUM.COM: Solusi Cerdas untuk Masalah Hukum Anda</strong><br><br>
                Selamat datang di CERDASHUKUM.COM, platform inovatif yang dirancang khusus untuk membantu Anda
                memberikan
                pertolongan pertama dalam menghadapi permasalahan hukum. Kami memahami betapa kompleks dan
                membingungkannya dunia hukum, oleh karena itu kami hadir dengan fitur-fitur inovatif yang siap
                memberikan solusi terbaik bagi Anda.<br><br>

                <strong>Fitur-fitur Unggulan Kami:</strong><br>
                🔍 <strong>Bantuan Hukum AI:</strong> Dengan teknologi berbasis machine learning, CERDASHUKUM.COM
                menawarkan bantuan hukum yang cerdas dan terpersonalisasi. Kami membantu Anda memahami hak-hak hukum
                Anda dan memberikan solusi yang tepat sesuai dengan masalah yang Anda hadapi.<br>
                📚 <strong>Rekomendasi Penyelesaian Masalah:</strong> Kami menyediakan rekomendasi penyelesaian masalah
                yang akurat dan cepat, membantu Anda menemukan jalan keluar terbaik dari permasalahan hukum yang
                rumit.<br>
                👩‍⚖️ <strong>Rekomendasi Pengacara:</strong> Temukan pengacara terpercaya yang sesuai dengan kebutuhan
                hukum Anda melalui fitur rekomendasi pengacara kami. Kami menjamin Anda akan mendapatkan pendamping
                hukum yang kompeten dan berpengalaman.<br>
                📱 <strong>Antarmuka Intuitif dan Komprehensif:</strong> Dengan desain yang user-friendly dan
                fungsionalitas yang lengkap, CERDASHUKUM.COM memastikan pengalaman pengguna yang menyenangkan dan
                efektif.
                Baik Anda masyarakat umum atau profesional hukum, platform kami dirancang untuk memenuhi kebutuhan hukum
                Anda.<br><br>

                Dengan CERDASHUKUM.COM, tingkatkan literasi hukum Anda dan dapatkan solusi cerdas untuk setiap masalah
                hukum
                yang Anda hadapi. Kami adalah mitra terpercaya Anda dalam menjelajahi dunia hukum yang kompleks. Ayo,
                tingkatkan pengetahuan dan perlindungan hukum Anda bersama kami!<br><br>

                <strong>CERDASHUKUM.COM - Cerdas Hukum, Cerdas Solusi.</strong>
            </p>
        </div>

        <x-text.title subtitle="Tim CERDASHUKUM" class="pt-12 md:pt-6" />

        <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
            <div class="relative shadow-md shadow-blue-100" data-sr-id="9"
                style="visibility: visible; opacity: 1; transition: opacity 2.8s cubic-bezier(0.5, 0, 0, 1) 0s, transform 2.8s cubic-bezier(0.5, 0, 0, 1) 0s;">
                <img src="{{ asset('assets/img/msohiburroihanakbar.png') }}" alt=""
                    class="relative h-[243px] md:h-[263px] object-cover rounded-md bg-gray-600">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                <div class="absolute bottom-0 left-0 p-4">
                    <h3 class="text-white font-semibold text-lg">M. Sohiburroihan Akbar</h3>
                    <p class="text-white text-sm">Web Developer</p>
                    <a class="text-white text-xs" href="">@ahayyy_</a>
                </div>
            </div>
            <div class="relative shadow-md shadow-blue-100" data-sr-id="9"
                style="visibility: visible; opacity: 1; transition: opacity 2.8s cubic-bezier(0.5, 0, 0, 1) 0s, transform 2.8s cubic-bezier(0.5, 0, 0, 1) 0s;">
                <img src="{{ asset('assets/img/nida.png') }}" alt=""
                    class="h-[243px] md:h-[263px] object-cover rounded-md bg-gray-600">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/20"></div>
                <div class="absolute bottom-0 left-0 p-4">
                    <h3 class="text-white font-semibold text-lg">Nida'an Khafiyya</h3>
                    <p class="text-white text-sm">Cloud Computing</p>
                    <a class="text-white text-xs" href="">@needkh_</a>
                </div>
            </div>
            <div class="relative shadow-md shadow-blue-100" data-sr-id="9"
                style="visibility: visible; opacity: 1; transition: opacity 2.8s cubic-bezier(0.5, 0, 0, 1) 0s, transform 2.8s cubic-bezier(0.5, 0, 0, 1) 0s;">
                <img src="{{ asset('assets/img/landi.png') }}" alt=""
                    class="h-[243px] md:h-[263px] object-cover rounded-md bg-gray-600">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/20"></div>
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
