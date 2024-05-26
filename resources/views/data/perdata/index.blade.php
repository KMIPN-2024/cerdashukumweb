<x-app-layout>
    @push('addon-css')
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.tailwindcss.css"> --}}
    @endpush
    <section id="pasal-perdata">
        <div class="p-6 md:p-12">
            <livewire:perdata-table />
        </div>
    </section>

    @push('addon-script')
        {{-- <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.7/js/dataTables.tailwindcss.js"></script> --}}
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
        {{-- <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": true,
                    "autoWidth": false,
                    "buttons": ["copy", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            });
        </script> --}}
    @endpush

</x-app-layout>
