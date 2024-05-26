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

            <div id="faq" class="my-10 grid grid-cols-1 md:grid-cols-2 md:gap-10 gap-3 dark:text-white">
                <div class="" id="accordion-collapse" data-accordion="collapse2">
                    <h2 id="accordion-collapse-heading-1"
                        class="bg-white dark:bg-[#15152C] shadow-md shadow-blue-100 py-3 px-4 rounded-lg transition duration-150 ease-in-out transform hover:-translate-y-1 hover:border-2 hover:border-primary">
                        <button type="button" class="flex justify-between gap-2 items-center w-full"
                            data-accordion-target="#accordion-collapse-body-1"
                            aria-controls="accordion-collapse-body-1">
                            <p class="text-sm md:text-base">Apa itu CerdasHukum</p>

                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 21 21"
                                fill="none">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 21 21"
                                fill="none">
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
