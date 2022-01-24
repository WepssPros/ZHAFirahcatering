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


<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Product &raquo; {{ $product->name }} &raquo; Gallery
</h2>






<div class="py-12">
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-10">
            <a href="{{ route('dashboard.product.gallery.create', $product->id) }}"
                class="bg-gren-500 hover:bg-gren-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                + Upload Foto
            </a>
            <a href="{{ route('dashboard.product.index',) }}"
                class="ml-5 bg-blue-500 hover:bg-gren-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                < Kembali </a> </div> <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <table id="crudTable">
                            <thead>
                                <tr>
                                    <th class="px-2 py-4">ID</th>
                                    <th class="px-2 py-4">Product</th>
                                    <th class="px-6 py-4">Photo</th>
                                    <th class="px-6 py-4">Featured</th>
                                    <th class="px-6 py-4">Action</th>
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
        buttons: [{
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ],
        columnDefs: [{
            targets: 0,
            visible: false
        }],
        "lengthMenu": [
            [10, 25, 50, 100, 1000, -1],
            ['10 Data', '25 Data', '50 Data', '100 Data', '1000 Data', 'Semua']
        ],
        ajax: {
            url: '{!! url()->current() !!}',
        },
        columns: [{
                data: 'id',
                name: 'id',
                width: '5%'
            },
            {
                data: 'products_id',
                name: 'products_id',
                width: '10%'
            },
            {
                data: 'url',
                name: 'url'
            },

            {
                data: 'is_featured',
                name: 'is_featured'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false,
                width: '25%'
            },
        ],
    });

</script>
@endsection
