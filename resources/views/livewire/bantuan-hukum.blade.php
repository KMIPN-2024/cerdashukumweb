<div>
    <div class="bg-white px-8 py-10 md:px-16 md:py-20 dark:bg-[#191d3c]">
        <div class="text-primary dark:text-[#b6b4fe] grid gap-y-4">
            <p class="font-semibold font-open text-base uppercase">artifical intelligence</p>
            <h3 class="font-semibold font-inter text-5xl">Temukan Solusi Hukum yang Sesuai <br class="hidden md:block">
                Hanya untuk Anda</h3>
            <p class="text-secondary dark:text-white">Beragam Pengacara yang Cocok untuk Kebutuhan Konsultasi Anda</p>
        </div>

        <div class="mt-12 md:px-20">
            <form wire:submit.prevent="submitForm">
                @csrf
                <div
                    class="w-full mb-4 border border-primary rounded-lg bg-[#F6F8FD] dark:bg-gray-700 dark:border-gray-600">
                    <div class="px-4 py-2 bg-[#F6F8FD] rounded-t-lg dark:bg-gray-800">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" rows="5" wire:loading.attr="disabled" wire:model="input"
                            class="w-full px-0 text-base text-gray-900 bg-[#F6F8FD] border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-white"
                            placeholder="Temukan solusi hukum yang tepat untuk setiap permasalahan perdata dengan platform CerdasHukum berbasis AI. Dengan fitur konsultasi kami, langkah hukum Anda menjadi lebih tepat dan fokus, sehingga menjamin kejelasan dan arah dalam perjalanan hukum Anda."
                            required wire:model="input"></textarea>
                    </div>
                    <div
                        class="flex items-center justify-between px-3 py-2 border-t border-primary dark:border-primary">
                        <div class="flex items-center ps-0 space-x-3 rtl:space-x-reverse sm:ps-2">
                            <div class="">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.6757 10.5321C16.2422 5.95033 21.8123 3.00027 28.0714 3C28.3177 2.99999 28.5539 3.09782 28.728 3.27196C28.9022 3.4461 29 3.68229 29 3.92857C29 10.1879 26.0499 15.7586 21.468 19.3253C21.5361 19.755 21.5714 20.1951 21.5714 20.6429C21.5714 25.2584 17.8298 29 13.2143 29C12.7014 29 12.2857 28.5843 12.2857 28.0714V22.9562C12.2743 22.9479 12.263 22.9394 12.2518 22.9306C11.0732 21.996 10.0051 20.9279 9.07052 19.7493C9.06142 19.7378 9.05262 19.7261 9.04411 19.7143H3.92857C3.41574 19.7143 3 19.2985 3 18.7857C3 14.1702 6.74162 10.4286 11.3571 10.4286C11.8053 10.4286 12.2457 10.4639 12.6757 10.5321ZM19.7143 9.5C18.1758 9.5 16.9286 10.7472 16.9286 12.2857C16.9286 13.8242 18.1758 15.0714 19.7143 15.0714C21.2528 15.0714 22.5 13.8242 22.5 12.2857C22.5 10.7472 21.2528 9.5 19.7143 9.5Z"
                                        fill="#335EF7" />
                                    <path
                                        d="M7.65568 22.4899C8.06674 22.1832 8.15139 21.6014 7.84474 21.1904C7.5381 20.7793 6.95628 20.6947 6.54522 21.0013C4.95878 22.1848 3.92857 24.0793 3.92857 26.2142C3.92857 26.5553 3.95493 26.891 4.0059 27.219C4.06797 27.6185 4.3814 27.9319 4.7809 27.994C5.10893 28.045 5.44455 28.0713 5.78571 28.0713C7.92061 28.0713 9.81511 27.0411 10.9986 25.4547C11.3052 25.0436 11.2206 24.4618 10.8095 24.1552C10.3985 23.8485 9.81666 23.9331 9.51001 24.3442C8.66197 25.481 7.30958 26.2142 5.78571 26.2142C5.78571 24.6903 6.51889 23.3379 7.65568 22.4899Z"
                                        fill="#335EF7" />
                                </svg>
                            </div>
                            <div class="dark:text-white">
                                <p>Ceritakan masalah hukum anda...</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <div wire:loading.class.remove="hidden" class="text-center putarputar hidden">
                                <div role="status">
                                    <svg aria-hidden="true"
                                        class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                        viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                            fill="currentColor" />
                                        <path
                                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                            fill="currentFill" />
                                    </svg>
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <button type="submit" wire:loading.attr="disabled" wire:loading.class="cursor-not-allowed"
                                class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-700">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.66763 0.0371428C1.34538 -0.0587352 0.997745 0.034187 0.762339 0.279127C0.526933 0.524068 0.441706 0.881536 0.540393 1.21003L3.50107 11.0651H13.8668C14.371 11.0651 14.7797 11.4838 14.7797 12.0002C14.7797 12.5166 14.371 12.9352 13.8668 12.9352H3.50108L0.540504 22.79C0.441816 23.1185 0.527045 23.4759 0.762454 23.7209C0.997863 23.9658 1.3455 24.0587 1.66775 23.9629C9.82157 21.5368 17.3937 17.7118 24.12 12.7591C24.3586 12.5834 24.5 12.3008 24.5 11.9999C24.5 11.6989 24.3586 11.4163 24.12 11.2407C17.3936 6.28796 9.82148 2.46312 1.66763 0.0371428Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            @error('input')
                <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Perhatian</span>
                    <div>
                        <span class="font-medium">Perhatian!</span> {{ $message }}
                    </div>
                </div>
            @enderror
            <p class="ms-auto text-xs text-gray-500 dark:text-gray-400">Gunakan Bahasa Indonesia yang baik dan benar
                agar mendapat jawaban yang maksimal <a href="#"
                    class="text-blue-600 dark:text-[#b6b4fe] hover:underline">Community
                    Guidelines</a>.</p>
        </div>
    </div>

    {{-- Section Bantuan Hukum --}}
    @if (!empty($this->response))
        <div class="flex py-8 md:py-16">
            <div class="flex-grow overflow-x-auto px-8 md:ps-28">
                <p class="font-medium text-lg text-secondary dark:text-[#b6b4fe] mb-4">Keluhan Anda sesuai dengan Pasal
                </p>
                <div class="bg-white dark:bg-[#15152C] rounded-lg shadow-md shadow-blue-200" id="accordion-flush"
                    data-accordion="collapse"
                    data-active-classes="bg-primary dark:bg-gray-800 text-white dark:text-white"
                    data-inactive-classes="bg-white dark:bg-[#15152C] text-gray-500 dark:text-gray-400">
                    @foreach ($this->response as $index => $item)
                        <h2 id="accordion-flush-heading-{{ $index + 1 }}">
                            <button type="button" wire:click="toggleAccordion({{ $index }})"
                                class="flex items-center justify-between w-full p-4 text-left rtl:text-right text-secondary border-b border-primary dark:border-gray-700 dark:text-gray-400 "
                                data-accordion-target="#accordion-flush-body-{{ $index + 1 }}"
                                aria-controls="accordion-flush-body-{{ $index + 1 }}">
                                <div class="flex flex-col max-w-[calc(100%-1.25rem)]">
                                    <span class="font-medium">{{ $item['pasal'] }}</span>
                                    <span class="truncate">{{ $item['isi'] }}</span>
                                </div>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-{{ $index + 1 }}"
                            class="{{ $activeAccordionIndex === $index ? '' : 'hidden' }}"
                            aria-labelledby="accordion-flush-heading-{{ $index + 1 }}">
                            <div class="bg-white dark:bg-[#15152C] p-5 shadow-md rounded-b-xl">
                                <div class="py-5 border-b border-primary dark:border-gray-700">
                                    <div class="flex flex-col items-center  text-secondary dark:text-gray-200">
                                        <p class="mb-2 font-semibold">BAB {{ $item['buku'] }} {{ $item['bab'] }}</p>
                                        <p class="mb-2 font-semibold">BAGIAN {{ $item['bagian'] }}</p>
                                    </div>
                                    <p class="text-[#6B7280] dark:text-gray-200">{{ $item['isi'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="md:ms-5 flex justify-end">
                <img src="{{ asset('assets/img/bantuan 1.png') }}"
                    class="hidden md:block md:w-[1000px] md:h-[460px] object-cover" alt="">
            </div>
        </div>
    @endif
    {{-- End Section Bantuan Hukum --}}
    @if ($loading)
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-primary"></div>
        </div>
    @endif


</div>
