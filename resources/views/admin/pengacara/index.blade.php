<x-admin :page="'pengacara-list'">
    <h1 class="text-2xl font-semibold text-gray-800 mb-4">List Pengacara</h1>
    {{-- <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
    </div> --}}

    <div style="width: 100%" class="overflow-x-auto shadow-md sm:rounded-lg">
        <table id="example1" class="text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-2 py-3">Nomor</th>
                    <th scope="col" class="px-6 py-3">Nama Lengkap</th>
                    <th scope="col" class="px-6 py-3">Keahlian</th>
                    <th scope="col" class="px-6 py-3">Alamat</th>
                    <th scope="col" class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $pengacara)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $pengacara->nama }}
                        </td>
                        <td class="px-6 py-4">
                            @foreach ($pengacara->keahlian as $keahlian)
                                <span class="text-green-600 hover:text-green-900 focus:outline-none inline-flex rounded-full bg-green-600 bg-opacity-10 px-3 py-1 text-sm font-medium">{{ $keahlian->keahlian }}</span>
                            @endforeach
                        </td>
                        <td class="px-6 py-4">{{ $pengacara->alamat }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('verifikasi-pengacara.show', $pengacara->id) }}"
                                class="text-indigo-600 hover:text-indigo-900 inline-flex rounded-full bg-indigo-600 bg-opacity-10 px-3 py-1 text-sm font-medium">
                                Detail
                            </a>
                            <form action="{{ route('verifikasi-pengacara.destroy', $pengacara->id) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-red-600 hover:text-red-900 focus:outline-none inline-flex rounded-full bg-red-600 bg-opacity-10 px-3 py-1 text-sm font-medium">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-admin>
