<x-app-layout>
    <div class="p-6 dark:text-gray-400">
        {{-- Title --}}
        <div class="flex flex-col items-center justify-center gap-y-5 text-center text-textsecondary pb-8 md:pb-10">
            <p class="font-semibold text-base">Privacy Policy</p>
            <h1 class="font-inter font-semibold text-2xl md:text-4xl">CerdasHukum Solusi Pertolongan Pertama Perdata</h1>
        </div>
        {{-- End Title --}}

        <div
            class="grid grid-rows-1 justify-center md:grid-rows-1 md:grid-cols-1 gap-y-5 md:gap-y-0 md:gap-x-14 pb-10 max-w-4xl mx-auto md:bg-white md:p-12 md:rounded-xl md:shadow-xl">
            <p class="text-lg md:text-xl leading-relaxed text-gray-700">
                Kami menghargai privasi Anda dan berkomitmen untuk melindungi data
                pribadi Anda. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi
                informasi Anda saat Anda menggunakan platform kami.
            </p>

            <p class="text-lg md:text-xl leading-relaxed text-gray-700 mt-6">
                <strong>Informasi yang Kami Kumpulkan</strong><br>
                Kami dapat mengumpulkan berbagai jenis informasi dari pengguna kami, termasuk namun tidak terbatas pada:
            <ul class="list-disc pl-6 mt-2">
                <li><strong>Informasi Pribadi:</strong> Nama, alamat email, nomor telepon, dan informasi lainnya yang
                    Anda berikan saat mendaftar atau menggunakan layanan kami.</li>
                <li><strong>Informasi Teknis:</strong> Alamat IP, jenis perangkat, dan data penggunaan terkait bagaimana
                    Anda berinteraksi dengan platform kami.</li>
                <li><strong>Data yang Diberikan Pengguna:</strong> Informasi yang Anda masukkan atau sampaikan melalui
                    fitur-fitur CERDASHUKUM.COM, seperti pertanyaan hukum atau preferensi rekomendasi.</li>
            </ul>
            </p>

            <p class="text-lg md:text-xl leading-relaxed text-gray-700 mt-6">
                <strong>Penggunaan Informasi</strong><br>
                Informasi yang kami kumpulkan digunakan untuk berbagai tujuan, termasuk:
            <ul class="list-disc pl-6 mt-2">
                <li>Menyediakan, mengoperasikan, dan meningkatkan layanan kami.</li>
                <li>Menyediakan rekomendasi dan solusi hukum yang sesuai dengan masalah yang Anda hadapi.</li>
                <li>Menghubungkan Anda dengan pengacara yang direkomendasikan sesuai kebutuhan hukum Anda.</li>
                <li>Mengirimkan pembaruan, pemberitahuan, dan materi promosi yang relevan.</li>
            </ul>
            </p>

            <p class="text-lg md:text-xl leading-relaxed text-gray-700 mt-6">
                <strong>Pengungkapan kepada Pihak Ketiga</strong><br>
                Kami tidak akan menjual, menyewakan, atau membagikan informasi pribadi Anda kepada pihak ketiga tanpa
                persetujuan Anda, kecuali dalam keadaan berikut:
            <ul class="list-disc pl-6 mt-2">
                <li>Untuk mematuhi kewajiban hukum atau permintaan yang sah dari pihak berwenang.</li>
                <li>Untuk melindungi hak, properti, atau keamanan CERDASHUKUM.COM dan pengguna kami.</li>
            </ul>
            </p>

            <p class="text-lg md:text-xl leading-relaxed text-gray-700 mt-6">
                <strong>Keamanan Data</strong><br>
                Kami mengambil langkah-langkah keamanan yang tepat untuk melindungi informasi pribadi Anda dari akses,
                perubahan, pengungkapan, atau penghancuran yang tidak sah. Namun, harap diperhatikan bahwa tidak ada
                metode transmisi data melalui internet yang 100% aman.
            </p>

            <p class="text-lg md:text-xl leading-relaxed text-gray-700 mt-6">
                <strong>Batasan Tanggung Jawab</strong><br>
                <strong>1. Fitur Bantuan Hukum AI:</strong> Fitur ini hanya memberikan informasi mengenai pasal yang
                sesuai dalam Kitab Undang-Undang Hukum Perdata (Burgelik Wetboek/BW). Pemahaman dan interpretasi
                terhadap pasal yang dihasilkan sistem sepenuhnya merupakan tanggung jawab pengguna.<br><br>
                <strong>2. Rekomendasi Penyelesaian Kasus:</strong> Informasi yang diberikan melalui platform ini tidak
                dimaksudkan sebagai pengganti nasihat atau konsultasi hukum profesional. Kami sangat menyarankan Anda
                untuk selalu berkonsultasi dengan ahli hukum untuk mendapatkan informasi yang lebih akurat dan
                terperinci.
            </p>

            <p class="text-lg md:text-xl leading-relaxed text-gray-700 mt-6">
                <strong>Hak-Hak Pengguna</strong><br>
                Anda memiliki hak untuk mengakses, mengoreksi, atau menghapus data pribadi Anda yang kami miliki. Jika
                Anda ingin melakukan salah satu dari tindakan ini, silakan hubungi kami melalui informasi kontak yang
                tersedia di platform kami.
            </p>

            <p class="text-lg md:text-xl leading-relaxed text-gray-700 mt-6">
                <strong>Perubahan pada Kebijakan Privasi</strong><br>
                Kami dapat memperbarui Kebijakan Privasi ini dari waktu ke waktu. Kami akan memberi tahu Anda tentang
                perubahan tersebut dengan memposting Kebijakan Privasi yang baru di situs web kami. Anda disarankan
                untuk meninjau Kebijakan Privasi ini secara berkala untuk setiap perubahan.
            </p>

            <p class="text-lg md:text-xl leading-relaxed text-gray-700 mt-6">
                <strong>Hubungi Kami</strong><br>
                Jika Anda memiliki pertanyaan atau kekhawatiran tentang Kebijakan Privasi ini, silakan hubungi kami
                melalui Halaman Tentang Kami.
            </p>
        </div>
    </div>

    @push('addon-script')
    @endpush
</x-app-layout>
