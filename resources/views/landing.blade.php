<x-app-layout>
    <section id="hero">
        <img src="{{ asset('assets/img/hero.png') }}" class="block md:hidden" alt="">
        <div class="bg-white md:grid md:grid-cols-2 justify-center items-center px-6 pt-10 md:px-24 md:pt-24 pb-16">

            <div class="flex flex-col gap-y-4">
                <p class="text-[#BFC0C2] font-medium">SELAMAT DATANG DI WEBSITE CerdasHukum 👋🏻</p>
                <h1 class="text-primary font-bold text-3xl md:text-5xl">Dengan CerdasHukum, Anda dapat berkonsultasi
                    masalah hukum
                    meski
                    di hari libur</h1>
                <p class="text-secondary font-medium">Temukan solusi hukum yang tepat untuk setiap permasalahan perdata
                    dengan platform CerdasHukum berbasis AI. Dengan fitur konsultasi kami, langkah hukum Anda menjadi
                    lebih
                    tepat dan fokus, sehingga menjamin kejelasan dan arah dalam perjalanan hukum Anda.</p>
                <div class="flex gap-x-6 items-center">
                    <a href="{{ route('bantuan-hukum') }}"
                        class="inline-flex items-center px-3 py-3 text-sm font-medium justify-center text-white bg-primary rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tanya
                        Hukum</a>
                    <p class="text-secondary">24K+ learners enrolled</p>
                </div>
            </div>
            <div class="">
                <img src="{{ asset('assets/img/hero.png') }}" class="hidden md:block" alt="">
            </div>
        </div>
    </section>

    <section id="hero2">
        <div class="p-6 md:p-16">
            <div class="text-primary font-semibold" data-aos="fade-right">
                <p class="text-base uppercase">SOLUSI HUKUM CERDAS</p>
                <h1 class="text-3xl md:text-5xl pb-5 pt-2">Temukan ratusan pengacara tepercaya yang siap membantu Anda!
                </h1>
                <p class="text-secondary pb-12">Beragam Pengacara yang Cocok untuk Kebutuhan Konsultasi Anda</p>
            </div>
            <div class="md:grid md:grid-cols-2 md:space-x-28 overflow-x-hidden">
                <img data-aos="fade-right" src="{{ asset('assets/img/section2.png') }}" alt="">
                <div class="flex flex-col text-[#565656] text-xl md:text-2xl md:mt-0 mt-4">
                    <div data-aos="fade-left"
                        class="flex md:items-center text-primary h-16 md:h-24 px-4 py-3 border-l-8 border-l-primary">
                        <p>Artificial Intelligence</p>
                    </div>
                    <div data-aos="fade-left" class="flex items-center h-16 md:h-24 px-4 py-3">
                        <hr>
                        <p>Akses ke berbagai hukum <br class="hidden md:block"> artikel dan sumber daya.</p>
                    </div>
                    <div data-aos="fade-left" class="flex items-center h-16 md:h-24 px-4 py-3">
                        <hr>
                        <p>Konsultasi langsung dengan <br class="hidden md:block"> ahli hukum</p>
                    </div>
                    <div data-aos="fade-left" class="text-base text-primary font-semibold py-6 md:py-9">
                        <p>Temukan Solusi Hukum Anda</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="coba-sekarang">
        <div class="bg-white px-10 md:px-24 xl:px-80 pt-16 pb-24">
            <x-text.title subtitle="Artificial Intelligence" title="Temukan Solusi Hukum yang Sesuai Hanya untukmu" />

            <div data-aos="fade-up" class="pt-7 md:pt-14">
                <form>
                    <div class="flex">

                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="search"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-400 shadow-md rounded-xl bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Discover the Right Legal Solution for You" required />
                            <div class="hidden md:block text-white absolute end-16 bottom-1.5 px-4 py-2">
                                <svg width="83" height="25" viewBox="0 0 83 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="1" width="39" height="23" rx="2" fill="#F0F0F0"
                                        fill-opacity="0.5" />
                                    <path
                                        d="M7.602 12.114C7.602 11.162 7.81667 10.308 8.246 9.552C8.67533 8.78667 9.25867 8.18933 9.996 7.76C10.7427 7.33067 11.5687 7.116 12.474 7.116C13.538 7.116 14.4667 7.37267 15.26 7.886C16.0533 8.39933 16.632 9.12733 16.996 10.07H15.47C15.1993 9.482 14.8073 9.02933 14.294 8.712C13.79 8.39467 13.1833 8.236 12.474 8.236C11.7927 8.236 11.1813 8.39467 10.64 8.712C10.0987 9.02933 9.674 9.482 9.366 10.07C9.058 10.6487 8.904 11.33 8.904 12.114C8.904 12.8887 9.058 13.57 9.366 14.158C9.674 14.7367 10.0987 15.1847 10.64 15.502C11.1813 15.8193 11.7927 15.978 12.474 15.978C13.1833 15.978 13.79 15.824 14.294 15.516C14.8073 15.1987 15.1993 14.746 15.47 14.158H16.996C16.632 15.0913 16.0533 15.8147 15.26 16.328C14.4667 16.832 13.538 17.084 12.474 17.084C11.5687 17.084 10.7427 16.874 9.996 16.454C9.25867 16.0247 8.67533 15.432 8.246 14.676C7.81667 13.92 7.602 13.066 7.602 12.114ZM20.4465 10.378V14.9C20.4465 15.2733 20.5258 15.5393 20.6845 15.698C20.8431 15.8473 21.1185 15.922 21.5105 15.922H22.4485V17H21.3005C20.5911 17 20.0591 16.8367 19.7045 16.51C19.3498 16.1833 19.1725 15.6467 19.1725 14.9V10.378H18.1785V9.328H19.1725V7.396H20.4465V9.328H22.4485V10.378H20.4465ZM25.2661 10.574C25.4901 10.1353 25.8074 9.79467 26.2181 9.552C26.6381 9.30933 27.1467 9.188 27.7441 9.188V10.504H27.4081C25.9801 10.504 25.2661 11.2787 25.2661 12.828V17H23.9921V9.328H25.2661V10.574ZM30.4887 6.64V17H29.2147V6.64H30.4887Z"
                                        fill="#565656" />
                                    <rect x="45" y="3" width="14" height="19" rx="2" fill="#F0F0F0"
                                        fill-opacity="0.5" />
                                    <path
                                        d="M55.358 12.422H52.376V15.446H51.186V12.422H48.218V11.344H51.186V8.306H52.376V11.344H55.358V12.422Z"
                                        fill="#565656" />
                                    <rect x="65" y="0.5" width="18" height="24" rx="2" fill="#F0F0F0"
                                        fill-opacity="0.5" />
                                    <path
                                        d="M75.87 17L71.852 12.548V17H70.578V7.242H71.852V11.764L75.884 7.242H77.494L73.07 12.128L77.536 17H75.87Z"
                                        fill="#565656" />
                                </svg>
                            </div>
                            <button type="submit"
                                class="absolute top-0 end-0 p-2.5 h-full text-sm font-medium text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 shadow-md">Check</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="artikel">
        {{-- Section Artikel --}}
        <div class="p-6 md:p-12">
            {{-- Title --}}
            <x-text.title subtitle="BERITA HUKUM LAINNYA" title="Jelajahi Lebih Banyak Wawasan Hukum"
                class="pb-8 md:pb-16" />
            {{-- End Title --}}

            {{-- Card Artikel --}}
            <div class="flex flex-col md:flex-row flex-wrap  gap-6 justify-center">

                <x-card.card>
                    <x-card.artikel img="assets/img/legal-article.png"
                        title="How to Report WhatsApp Message Scam Tactics"
                        desc="Learn the steps to report fraudulent schemes occurring through WhatsApp messages to protect yourself and others from online scams" />
                </x-card.card>
                <x-card.card>
                    <x-card.artikel img="assets/img/legal-article.png"
                        title="How to Report WhatsApp Message Scam Tactics"
                        desc="Learn the steps to report fraudulent schemes occurring through WhatsApp messages to protect yourself and others from online scams" />
                </x-card.card>
                <x-card.card>
                    <x-card.artikel img="assets/img/legal-article.png"
                        title="How to Report WhatsApp Message Scam Tactics"
                        desc="Learn the steps to report fraudulent schemes occurring through WhatsApp messages to protect yourself and others from online scams" />
                </x-card.card>
            </div>
            {{-- End Card Artikel --}}
        </div>
        {{-- End Section Artikel --}}
    </section>

    <section id="demo-now">
        <div
            class="bg-white md:grid md:grid-cols-2 justify-center items-center px-6 pt-4 md:pt-0 md:px-24 pb-16 overflow-x-hidden">
            <img data-aos="fade-right" src="{{ asset('assets/img/Frame 1171277302.png') }}" class="hidden md:block"
                alt="">
            <div data-aos="fade-left" class="flex flex-col gap-y-4 text-primary">
                {{-- <p class="text-[#BFC0C2] font-medium">SELAMAT DATANG DI WEBSITE CerdasHukum 👋🏻</p> --}}
                <h1 class="font-semibold text-3xl md:text-4xl">Punya Pertanyaan? <br class="hidden md:block"> <span
                        class="font-bold">CerdasHukum</span> Siap Membantu 24 Jam</h1>
                <p class="font-medium">Dapatkan informasi tentang hukum perdata hanya di CerdasHukum</p>
                <div
                    class="bg-[#E9F5FF] text-primary text-sm font-medium me-2 px-2 py-2 rounded-full dark:bg-blue-900 dark:text-blue-300">
                    <span
                        class="bg-primary text-sm text-white font-medium me-2 px-2.5 py-1 rounded-full dark:bg-blue-900 dark:text-blue-300">Masih
                        ragu?</span>
                    Pelajari bagaimana CerdasHukum dapat memberikan Anda rekomendasi hukum!
                </div>
                <div class="flex gap-x-6 items-center">
                    <a href="{{ route('bantuan-hukum') }}"
                        class="inline-flex items-center px-3 py-3 text-sm font-medium justify-center text-white bg-primary rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tanya
                        Hukum</a>
                    <a href="{{ route('pengacara.create') }}"
                        class="inline-flex items-center px-3 py-3 text-sm font-medium justify-center text-primary bg-transparent border border-primary rounded-lg hover:border-blue-800 hover:text-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Daftar Menjadi Kontribut</a>

                </div>
            </div>
        </div>
    </section>

    <section id="pengacara">
        {{-- Section Rekomendasi Pengacara --}}
        <div class="p-6 md:p-12">
            {{-- Title --}}
            <x-text.title subtitle="Kumpulan Pengacara Hukum"
                title="Ratusan Pengacara Tepercaya <br> Siap
                    Membantu
                    Anda"
                class="pb-8 md:pb-16" />
            {{-- End Title --}}

            {{-- Card Pengacara --}}
            <div class="flex flex-col md:flex-row flex-wrap  gap-6 justify-center">
                @foreach ($pengacara as $lawyer)
                    <x-card.card>
                        <x-card.pengacara img="{{ $lawyer->foto }}" name="{{ $lawyer->nama }}" :specialties="$lawyer->keahlian"
                            location="{{ $lawyer->alamat }}" />
                    </x-card.card>
                @endforeach
                {{-- <x-card.card>
                    <x-card.pengacara img="assets/img/lawyer.png" name="Ahay" specialties="Perceraian"
                        experience="5 Tahun" />
                </x-card.card>
                <x-card.card>
                    <x-card.pengacara img="assets/img/lawyer.png" name="Ahay" specialties="Perceraian"
                        experience="5 Tahun" />
                </x-card.card>
                <x-card.card>
                    <x-card.pengacara img="assets/img/lawyer.png" name="Ahay" specialties="Perceraian"
                        experience="5 Tahun" />
                </x-card.card> --}}
            </div>
            {{-- End Card Pengacara --}}
        </div>
        {{-- End Section Rekomendasi Pengacara --}}
    </section>

    <section id="faq">
        {{-- Section FAQ --}}
        <div class="flex flex-col items-center h-fit mx-5">
            {{-- Title --}}
            <x-text.title subtitle="CerdasHukum" title="Frequently Asked Questions" />
            {{-- End Title --}}

            <div id="faq" class="my-10 grid grid-cols-1 md:grid-cols-2 md:gap-10 gap-3 dark:text-white">
                <div class="" id="accordion-collapse" data-accordion="collapse2">
                    <h2 id="accordion-collapse-heading-1"
                        class="bg-white dark:bg-[#15152C] shadow-md shadow-blue-100 py-3 px-4 rounded-lg transition duration-150 ease-in-out transform hover:-translate-y-1 hover:border-2 hover:border-primary">
                        <button type="button" class="flex justify-between gap-2 items-center w-full"
                            data-accordion-target="#accordion-collapse-body-1"
                            aria-controls="accordion-collapse-body-1">
                            <p class="text-sm md:text-base">Apa itu CerdasHukum</p>

                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 21 21" fill="none">
                                <path
                                    d="M10.25 9.5C10.9404 9.5 11.5 9.50011 11.5 9.50011L19 9.50005C19.6904 9.50005 20.25 10.0597 20.25 10.7501C20.25 11.4404 19.6904 12.0001 19 12.0001H11.5H11.25C11.113 12.0001 10.4404 12.0001 9.75 12.0001C9.05964 12.0001 8.93429 12.0001 9 12.0001H1.5C0.809644 12.0001 0.25 11.4404 0.25 10.7501C0.25 10.0597 0.809644 9.50005 1.5 9.50005H9C9 9.50005 9.55964 9.5 10.25 9.5Z"
                                    fill="#3258E8" />
                                <path
                                    d="M10.5 9.25C11.1904 9.25 11.75 9.25011 11.75 9.25011L19.25 9.25005C19.9404 9.25005 20.5 9.8097 20.5 10.5001C20.5 11.1904 19.9404 11.7501 19.25 11.7501H11.75H11.5C11.363 11.7501 10.6904 11.7501 10 11.7501C9.30964 11.7501 9.18429 11.7501 9.25 11.7501H1.75C1.05964 11.7501 0.5 11.1904 0.5 10.5001C0.5 9.8097 1.05964 9.25005 1.75 9.25005H9.25C9.25 9.25005 9.80964 9.25 10.5 9.25Z"
                                    fill="#3258E8" />
                                <path
                                    d="M9.25 10.5C9.25 9.80964 9.25011 9.25 9.25011 9.25L9.25005 1.75C9.25005 1.05964 9.8097 0.5 10.5001 0.5C11.1904 0.5 11.7501 1.05964 11.7501 1.75L11.7501 9.25V9.5C11.7501 9.637 11.7501 10.3096 11.7501 11C11.7501 11.6904 11.7501 11.8157 11.7501 11.75V19.25C11.7501 19.9404 11.1904 20.5 10.5001 20.5C9.8097 20.5 9.25005 19.9404 9.25005 19.25V11.75C9.25005 11.75 9.25 11.1904 9.25 10.5Z"
                                    fill="#3258E8" />
                            </svg>
                            {{-- <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                          </svg> --}}


                        </button>
                    </h2>
                    <div id="accordion-collapse-body-1"
                        class="hidden bg-white dark:bg-[#15152C] shadow-md shadow-blue-100"
                        aria-labelledby="accordion-collapse-heading-1">
                        <div class="p-5 shadow-md rounded-b-xl">
                            <p class="text-sm md:text-base">Yo nda tau ko tanya sayaaa</p>
                        </div>
                    </div>
                </div>
                <div id="accordion-collapse" data-accordion="collapse2">
                    <h2 id="accordion-collapse-heading-2"
                        class="bg-white dark:bg-[#15152C] shadow-md shadow-blue-100 py-3 px-4 rounded-lg transition duration-150 ease-in-out transform hover:-translate-y-1 hover:border-2 hover:border-primary">
                        <button type="button" class="flex justify-between items-center gap-2 w-full"
                            data-accordion-target="#accordion-collapse-body-2"
                            aria-controls="accordion-collapse-body-2">
                            <p class="text-sm md:text-base">Apakah jawaban yang diberikan akurat?</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 21 21" fill="none">
                                <path
                                    d="M10.25 9.5C10.9404 9.5 11.5 9.50011 11.5 9.50011L19 9.50005C19.6904 9.50005 20.25 10.0597 20.25 10.7501C20.25 11.4404 19.6904 12.0001 19 12.0001H11.5H11.25C11.113 12.0001 10.4404 12.0001 9.75 12.0001C9.05964 12.0001 8.93429 12.0001 9 12.0001H1.5C0.809644 12.0001 0.25 11.4404 0.25 10.7501C0.25 10.0597 0.809644 9.50005 1.5 9.50005H9C9 9.50005 9.55964 9.5 10.25 9.5Z"
                                    fill="#3258E8" />
                                <path
                                    d="M10.5 9.25C11.1904 9.25 11.75 9.25011 11.75 9.25011L19.25 9.25005C19.9404 9.25005 20.5 9.8097 20.5 10.5001C20.5 11.1904 19.9404 11.7501 19.25 11.7501H11.75H11.5C11.363 11.7501 10.6904 11.7501 10 11.7501C9.30964 11.7501 9.18429 11.7501 9.25 11.7501H1.75C1.05964 11.7501 0.5 11.1904 0.5 10.5001C0.5 9.8097 1.05964 9.25005 1.75 9.25005H9.25C9.25 9.25005 9.80964 9.25 10.5 9.25Z"
                                    fill="#3258E8" />
                                <path
                                    d="M9.25 10.5C9.25 9.80964 9.25011 9.25 9.25011 9.25L9.25005 1.75C9.25005 1.05964 9.8097 0.5 10.5001 0.5C11.1904 0.5 11.7501 1.05964 11.7501 1.75L11.7501 9.25V9.5C11.7501 9.637 11.7501 10.3096 11.7501 11C11.7501 11.6904 11.7501 11.8157 11.7501 11.75V19.25C11.7501 19.9404 11.1904 20.5 10.5001 20.5C9.8097 20.5 9.25005 19.9404 9.25005 19.25V11.75C9.25005 11.75 9.25 11.1904 9.25 10.5Z"
                                    fill="#3258E8" />
                            </svg>

                        </button>
                    </h2>
                    <div id="accordion-collapse-body-2" class="hidden bg-white dark:bg-[#15152C]"
                        aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-5 shadow-md rounded-b-xl shadow-blue-100">
                            <p class="text-sm md:text-base">Yo nda tau ko tanya sayaaa</p>
                        </div>
                    </div>
                </div>
                <div id="accordion-collapse" data-accordion="collapse2">
                    <h2 id="accordion-collapse-heading-3"
                        class="bg-white dark:bg-[#15152C] shadow-md shadow-blue-100 py-3 px-4 rounded-lg transition duration-150 ease-in-out transform hover:-translate-y-1 hover:border-2 hover:border-primary">
                        <button type="button" class="flex justify-between gap-2 items-center w-full"
                            data-accordion-target="#accordion-collapse-body-3"
                            aria-controls="accordion-collapse-body-3">
                            <p class="text-sm md:text-base">
                                Apakah CerdasHukum gratis digunakan?
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 21 21" fill="none">
                                <path
                                    d="M10.25 9.5C10.9404 9.5 11.5 9.50011 11.5 9.50011L19 9.50005C19.6904 9.50005 20.25 10.0597 20.25 10.7501C20.25 11.4404 19.6904 12.0001 19 12.0001H11.5H11.25C11.113 12.0001 10.4404 12.0001 9.75 12.0001C9.05964 12.0001 8.93429 12.0001 9 12.0001H1.5C0.809644 12.0001 0.25 11.4404 0.25 10.7501C0.25 10.0597 0.809644 9.50005 1.5 9.50005H9C9 9.50005 9.55964 9.5 10.25 9.5Z"
                                    fill="#3258E8" />
                                <path
                                    d="M10.5 9.25C11.1904 9.25 11.75 9.25011 11.75 9.25011L19.25 9.25005C19.9404 9.25005 20.5 9.8097 20.5 10.5001C20.5 11.1904 19.9404 11.7501 19.25 11.7501H11.75H11.5C11.363 11.7501 10.6904 11.7501 10 11.7501C9.30964 11.7501 9.18429 11.7501 9.25 11.7501H1.75C1.05964 11.7501 0.5 11.1904 0.5 10.5001C0.5 9.8097 1.05964 9.25005 1.75 9.25005H9.25C9.25 9.25005 9.80964 9.25 10.5 9.25Z"
                                    fill="#3258E8" />
                                <path
                                    d="M9.25 10.5C9.25 9.80964 9.25011 9.25 9.25011 9.25L9.25005 1.75C9.25005 1.05964 9.8097 0.5 10.5001 0.5C11.1904 0.5 11.7501 1.05964 11.7501 1.75L11.7501 9.25V9.5C11.7501 9.637 11.7501 10.3096 11.7501 11C11.7501 11.6904 11.7501 11.8157 11.7501 11.75V19.25C11.7501 19.9404 11.1904 20.5 10.5001 20.5C9.8097 20.5 9.25005 19.9404 9.25005 19.25V11.75C9.25005 11.75 9.25 11.1904 9.25 10.5Z"
                                    fill="#3258E8" />
                            </svg>

                        </button>
                    </h2>
                    <div id="accordion-collapse-body-3" class="hidden bg-white dark:bg-[#15152C]"
                        aria-labelledby="accordion-collapse-heading-3">
                        <div class="p-5 shadow-md rounded-b-xl shadow-blue-100">
                            <p class="text-sm md:text-base">Yo nda tau ko tanya sayaaa</p>
                        </div>
                    </div>
                </div>
                <div id="accordion-collapse" data-accordion="collapse2">
                    <h2 id="accordion-collapse-heading-4"
                        class="bg-white dark:bg-[#15152C] shadow-md shadow-blue-100 py-3 px-4 rounded-lg transition duration-150 ease-in-out transform hover:-translate-y-1 hover:border-2 hover:border-primary">
                        <button type="button" class="flex justify-between gap-2 items-center w-full"
                            data-accordion-target="#accordion-collapse-body-4"
                            aria-controls="accordion-collapse-body-4">
                            <p class="text-sm md:text-base">
                                Bagaimana CerdasHukum bekerja?
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 21 21" fill="none">
                                <path
                                    d="M10.25 9.5C10.9404 9.5 11.5 9.50011 11.5 9.50011L19 9.50005C19.6904 9.50005 20.25 10.0597 20.25 10.7501C20.25 11.4404 19.6904 12.0001 19 12.0001H11.5H11.25C11.113 12.0001 10.4404 12.0001 9.75 12.0001C9.05964 12.0001 8.93429 12.0001 9 12.0001H1.5C0.809644 12.0001 0.25 11.4404 0.25 10.7501C0.25 10.0597 0.809644 9.50005 1.5 9.50005H9C9 9.50005 9.55964 9.5 10.25 9.5Z"
                                    fill="#3258E8" />
                                <path
                                    d="M10.5 9.25C11.1904 9.25 11.75 9.25011 11.75 9.25011L19.25 9.25005C19.9404 9.25005 20.5 9.8097 20.5 10.5001C20.5 11.1904 19.9404 11.7501 19.25 11.7501H11.75H11.5C11.363 11.7501 10.6904 11.7501 10 11.7501C9.30964 11.7501 9.18429 11.7501 9.25 11.7501H1.75C1.05964 11.7501 0.5 11.1904 0.5 10.5001C0.5 9.8097 1.05964 9.25005 1.75 9.25005H9.25C9.25 9.25005 9.80964 9.25 10.5 9.25Z"
                                    fill="#3258E8" />
                                <path
                                    d="M9.25 10.5C9.25 9.80964 9.25011 9.25 9.25011 9.25L9.25005 1.75C9.25005 1.05964 9.8097 0.5 10.5001 0.5C11.1904 0.5 11.7501 1.05964 11.7501 1.75L11.7501 9.25V9.5C11.7501 9.637 11.7501 10.3096 11.7501 11C11.7501 11.6904 11.7501 11.8157 11.7501 11.75V19.25C11.7501 19.9404 11.1904 20.5 10.5001 20.5C9.8097 20.5 9.25005 19.9404 9.25005 19.25V11.75C9.25005 11.75 9.25 11.1904 9.25 10.5Z"
                                    fill="#3258E8" />
                            </svg>

                        </button>
                    </h2>
                    <div id="accordion-collapse-body-4" class="hidden bg-white dark:bg-[#15152C]"
                        aria-labelledby="accordion-collapse-heading-4">
                        <div class="p-5 shadow-md rounded-b-xl shadow-blue-100">
                            <p class="text-sm md:text-base">Yo nda tau ko tanya sayaaa</p>
                        </div>
                    </div>
                </div>
                <div id="accordion-collapse" data-accordion="collapse2">
                    <h2 id="accordion-collapse-heading-5"
                        class="bg-white dark:bg-[#15152C] shadow-md shadow-blue-100 py-3 px-4 rounded-lg transition duration-150 ease-in-out transform hover:-translate-y-1 hover:border-2 hover:border-primary">
                        <button type="button" class="flex justify-between gap-2 items-center w-full"
                            data-accordion-target="#accordion-collapse-body-5"
                            aria-controls="accordion-collapse-body-5">
                            <p class="text-sm md:text-base">Berapa biaya layanan dari POS?</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 21 21" fill="none">
                                <path
                                    d="M10.25 9.5C10.9404 9.5 11.5 9.50011 11.5 9.50011L19 9.50005C19.6904 9.50005 20.25 10.0597 20.25 10.7501C20.25 11.4404 19.6904 12.0001 19 12.0001H11.5H11.25C11.113 12.0001 10.4404 12.0001 9.75 12.0001C9.05964 12.0001 8.93429 12.0001 9 12.0001H1.5C0.809644 12.0001 0.25 11.4404 0.25 10.7501C0.25 10.0597 0.809644 9.50005 1.5 9.50005H9C9 9.50005 9.55964 9.5 10.25 9.5Z"
                                    fill="#3258E8" />
                                <path
                                    d="M10.5 9.25C11.1904 9.25 11.75 9.25011 11.75 9.25011L19.25 9.25005C19.9404 9.25005 20.5 9.8097 20.5 10.5001C20.5 11.1904 19.9404 11.7501 19.25 11.7501H11.75H11.5C11.363 11.7501 10.6904 11.7501 10 11.7501C9.30964 11.7501 9.18429 11.7501 9.25 11.7501H1.75C1.05964 11.7501 0.5 11.1904 0.5 10.5001C0.5 9.8097 1.05964 9.25005 1.75 9.25005H9.25C9.25 9.25005 9.80964 9.25 10.5 9.25Z"
                                    fill="#3258E8" />
                                <path
                                    d="M9.25 10.5C9.25 9.80964 9.25011 9.25 9.25011 9.25L9.25005 1.75C9.25005 1.05964 9.8097 0.5 10.5001 0.5C11.1904 0.5 11.7501 1.05964 11.7501 1.75L11.7501 9.25V9.5C11.7501 9.637 11.7501 10.3096 11.7501 11C11.7501 11.6904 11.7501 11.8157 11.7501 11.75V19.25C11.7501 19.9404 11.1904 20.5 10.5001 20.5C9.8097 20.5 9.25005 19.9404 9.25005 19.25V11.75C9.25005 11.75 9.25 11.1904 9.25 10.5Z"
                                    fill="#3258E8" />
                            </svg>

                        </button>
                    </h2>
                    <div id="accordion-collapse-body-5" class="hidden bg-white dark:bg-[#15152C]"
                        aria-labelledby="accordion-collapse-heading-5">
                        <div class="p-5 shadow-md rounded-b-xl shadow-blue-100">
                            <p class="text-sm md:text-base">Yo nda tau ko tanya sayaaa</p>
                        </div>
                    </div>
                </div>
                <div id="accordion-collapse" data-accordion="collapse2">
                    <h2 id="accordion-collapse-heading-6"
                        class="bg-white dark:bg-[#15152C] shadow-md shadow-blue-100 py-3 px-4 rounded-lg transition duration-150 ease-in-out transform hover:-translate-y-1 hover:border-2 hover:border-primary">
                        <button type="button" class="flex justify-between gap-2 items-center w-full"
                            data-accordion-target="#accordion-collapse-body-6"
                            aria-controls="accordion-collapse-body-6">
                            <p class="text-sm md:text-base">Apakah perlu pengetahuan hukum untuk menggunakan
                                CerdasHukum?
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 21 21" fill="none">
                                <path
                                    d="M10.25 9.5C10.9404 9.5 11.5 9.50011 11.5 9.50011L19 9.50005C19.6904 9.50005 20.25 10.0597 20.25 10.7501C20.25 11.4404 19.6904 12.0001 19 12.0001H11.5H11.25C11.113 12.0001 10.4404 12.0001 9.75 12.0001C9.05964 12.0001 8.93429 12.0001 9 12.0001H1.5C0.809644 12.0001 0.25 11.4404 0.25 10.7501C0.25 10.0597 0.809644 9.50005 1.5 9.50005H9C9 9.50005 9.55964 9.5 10.25 9.5Z"
                                    fill="#3258E8" />
                                <path
                                    d="M10.5 9.25C11.1904 9.25 11.75 9.25011 11.75 9.25011L19.25 9.25005C19.9404 9.25005 20.5 9.8097 20.5 10.5001C20.5 11.1904 19.9404 11.7501 19.25 11.7501H11.75H11.5C11.363 11.7501 10.6904 11.7501 10 11.7501C9.30964 11.7501 9.18429 11.7501 9.25 11.7501H1.75C1.05964 11.7501 0.5 11.1904 0.5 10.5001C0.5 9.8097 1.05964 9.25005 1.75 9.25005H9.25C9.25 9.25005 9.80964 9.25 10.5 9.25Z"
                                    fill="#3258E8" />
                                <path
                                    d="M9.25 10.5C9.25 9.80964 9.25011 9.25 9.25011 9.25L9.25005 1.75C9.25005 1.05964 9.8097 0.5 10.5001 0.5C11.1904 0.5 11.7501 1.05964 11.7501 1.75L11.7501 9.25V9.5C11.7501 9.637 11.7501 10.3096 11.7501 11C11.7501 11.6904 11.7501 11.8157 11.7501 11.75V19.25C11.7501 19.9404 11.1904 20.5 10.5001 20.5C9.8097 20.5 9.25005 19.9404 9.25005 19.25V11.75C9.25005 11.75 9.25 11.1904 9.25 10.5Z"
                                    fill="#3258E8" />
                            </svg>

                        </button>
                    </h2>
                    <div id="accordion-collapse-body-6" class="hidden bg-white dark:bg-[#15152C]"
                        aria-labelledby="accordion-collapse-heading-6">
                        <div class="p-5 shadow-md rounded-b-xl shadow-blue-100">
                            <p class="text-sm md:text-base">Yo nda tau ko tanya sayaaa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Section FAQ --}}
    </section>

</x-app-layout>
