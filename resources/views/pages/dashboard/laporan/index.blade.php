@extends('layouts.admin')

@section('Dashboard-Content')


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js   "></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js   "></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
<script src="../../extensions/Editor/js/dataTables.editor.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>


    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Laporan') }}
    </h2>





<div class="py-12">
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="{{ ('laporan/show') }}" class=" bg-blue-500 hover:bg-gren-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                Lihat produk apa saja yang di pesan
            </a>
        </div>
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <table id="crudTable" style="width:100%" class="display">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Acara</th>
                        <th>Tanggal Pemesan Dan Jam Dibuat</th>
                        <th>Status</th>
                        <th>Total Pembayaran</th>
                        <th>Porsi pesanan</th>

                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    // AJAX DataTable
    var datatable = $('#crudTable').DataTable({
        dom: 'lBfrtip',
        buttons: [
            {
                messageTop: 'Laporan Keuangan Zhafirah Catering',
                customize: function ( win ) {
                    $(win.document.body)

                        .css( 'font-size', '12pt' )
                        .prepend(
                            '<img src="" style="position:absolute; top:0; left:0; justify" />'

                        );

                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                },
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis',


        ],
        alignment: 'center',
        columnDefs: [ {
            targets: 0,
            visible: false
        } ],

        "lengthMenu": [
            [ 50, 100, 1000, -1 ],
            [  '50 Data', '100 Data', '1000 Data', 'Semua' ]
        ],
        processing: true,
        serverSide: true,
        ajax: {
            url: '{!! url()->current() !!}',
        },

        columns: [
            { data: 'id', name: 'id', width:'5%'},
            { data: 'name_acara', name: 'name_acara', width:'25%'},


            {

              data: 'created_at' , format: 'DateTime',
              name: 'created_at',

            },

            { data: 'status', name: 'status' },
            { data: 'total_price', render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp.' ) , name: 'total_price ' },
            { data: 'porsi', name: 'porsi ' },

        ],
    });
</script>
@endsection





