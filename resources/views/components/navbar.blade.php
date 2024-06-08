{{-- navbar --}}
    <nav class="bg-transparent w-full top-0 left-0 border-b border-b-blue-100">
        <div id="navbar" class="max-w-full flex flex-wrap items-center justify-between mx-auto xl:mx-20 p-4">
            <a href="#hero">
                <img src="{{ asset('assets/img/cerdashukum-logo.png') }}" class="h-10 hidden md:block" alt="POS Logo" />
                <img src="{{ asset('assets/img/cerdashukum-logo.png') }}" class="h-10 block md:hidden" alt="POS Logo" />
            </a>
            {{-- <div class="flex md:order-2 items-center gap-4 xl:gap-8">
                @if (Auth::user())
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit"
                            class="hidden md:block text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class=" text-red-500 font-semibold rounded hidden md:block"
                        aria-current="page">Masuk</a>

                    <a href="{{ route('register') }}"
                        class="hidden md:block text-white-50 bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0">
                        Get started
                    </a>
                @endif
            </div> --}}
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="21" viewBox="0 0 31 21"
                        fill="none">
                        <path d="M2.50098 2.50001H28.501M2.50098 10.5H28.501M2.50098 18.5H28.501" stroke="#335EF7"
                            stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            <div class="ml-2 lg:ml-10 xl:ml-20 items-center justify-between hidden w-full md:flex md:w-auto"
                id="navbar-default">
                <ul
                    class="flex flex-col lg:gap-2 p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white-50 md:bg-white-100 md:flex-row md:space-x-4 lg:space-x-8 md:mt-0 md:border-0 md:dark:bg-transparent items-center">
                    <li>
                        <a href="{{ route('landing') }}"
                            class="block py-2 pl-3 pr-4 rounded md:bg-transparent md:p-0 {{ request()->is('/') ? ' md:text-primary text-primary underline underline-offset-8' : 'text-secondary dark:text-white hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:hover:underline md:hover:underline-offset-8 md:p-0 md:dark:hover:bg-transparent' }}"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        {{-- <a href="#pengacara" --}}
                        <a href="{{ route('pengacara.index') }}"
                            class="block py-2 pl-3 pr-4 rounded md:bg-transparent md:p-0 {{ request()->is('') ? ' md:text-primary text-primary underline underline-offset-8' : 'text-secondary dark:text-white hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:hover:underline md:hover:underline-offset-8 md:p-0 md:dark:hover:bg-transparent' }}">Pengacara</a>
                    </li>
                    <li>
                        <a href="{{ route('perdata.index') }}"
                            class="block py-2 pl-3 pr-4 rounded md:bg-transparent md:p-0 {{ request()->is('perdata') ? 'md:text-primary text-primary underline underline-offset-8' : 'text-secondary dark:text-white hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:hover:underline md:hover:underline-offset-8 md:p-0 md:dark:hover:bg-transparent' }}">Perdata</a>
                    </li>
                    <li>
                        <a href="#faq"
                            class="block py-2 pl-3 pr-4 text-secondary dark:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:hover:underline md:hover:underline-offset-8 md:p-0 md:dark:hover:bg-transparent">FAQ</a>
                    </li>
                    <li>
                        <a href="{{ route('tentang-kami') }}"
                            class="block py-2 pl-3 pr-4 text-secondary dark:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:hover:underline md:hover:underline-offset-8 md:p-0 md:dark:hover:bg-transparent">Tentang Kami</a>
                    </li>
                    {{-- Mobile Screen --}}
                    <li>
                        <a href="{{ route('bantuan-hukum') }}"
                            class="block md:hidden py-2 pl-3 pr-4 text-secondary dark:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:hover:underline md:hover:underline-offset-8 md:p-0 md:dark:hover:bg-transparent">Get
                            Started</a>
                    </li>
                    {{-- End Mobile Screen --}}

                    {{-- Desktop Screen --}}
                    <li>
                        <a href="{{ route('bantuan-hukum') }}"
                            class="hidden md:block text-white bg-primary hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center">
                            Tanya Hukum
                        </a>
                    </li>
                    {{-- End Desktop Screen --}}
                </ul>
            </div>
        </div>
    </nav>

    {{-- end navbar --}}