<x-app-layout>
    @push('addon-css')
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.tailwindcss.css">
    @endpush
    <section id="pasal-perdata">
        <div class="p-6 md:p-12">


            <div style="width: 100%" class="overflow-x-auto shadow-md sm:rounded-lg">
                <table id="example1"  class="text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-2 py-3">
                                Nomor
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Pasal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Isi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Buku
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bagian
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $perdata)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" style="">
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $index+1 }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $perdata['Pasal'] }}
                                </td>
                                <td class="px-6 py-4" style="width: 10%">
                                    {{ $perdata['Isi'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $perdata['Buku'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $perdata['Bab'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $perdata['Bagian'] }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    @push('addon-script')
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.tailwindcss.js"></script>
        {{-- <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script> --}}
        {{-- <script src="assets/plugins/jszip/jszip.min.js"></script>
        <script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="assets/plugins/pdfmake/vfs_fonts.js"></script> --}}
        {{-- <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script> --}}
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": true,
                    "autoWidth": false,
                    "buttons": ["copy", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            });
        </script>
    @endpush

</x-app-layout>
