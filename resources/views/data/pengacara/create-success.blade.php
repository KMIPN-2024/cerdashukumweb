<x-app-layout>
    @push('addon-css')
    @endpush
    <section id="pengacara">
        <div class="bg-white dark:bg-transparent">
            <div class="bg-white dark:bg-transparent p-6  md:mx-auto">
                <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
                    <path fill="currentColor"
                        d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                    </path>
                </svg>
                <div class="text-center dark:text-white">
                    <h3 class="md:text-2xl text-base text-gray-900 dark:text-white font-semibold text-center">Pendaftaran Berhasil!</h3>
                    <p class="text-gray-600 dark:text-white my-2">Data anda sedang diverifikasi oleh admin CerdasHukum</p>
                    <p> Have a great day! </p>
                    <div class="py-10 text-center">
                        <a href="{{ route('landing') }}" class="px-12 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3">
                            GO BACK
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('addon-script')
    @endpush

</x-app-layout>
