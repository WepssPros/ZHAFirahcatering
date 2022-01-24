@extends('layouts.admin')

@section('Dashboard-Content')



        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>

    <x-slot name="script">

    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <a href="{{ route('dashboard.product.create') }}" class=" bg-gren-500 hover:bg-gren-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                    + Create Product
                </a>
            </div>
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Category</th>
                            <th>Harga</th>
                            <th>Aksi</th>
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
                    extend: 'print',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                'colvis'
            ],
            columnDefs: [ {
                targets: 0,
                visible: false
            } ],

            "lengthMenu": [
                [ 10, 25, 50, 100, 1000, -1 ],
                [ '10 Data', '25 Data', '50 Data', '100 Data', '1000 Data', 'Semua' ]
            ],
            processing: true,
            serverSide: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'id', name: 'id', width: '5%'},
                { data: 'name', name: 'name' },
                { data: 'category', name: 'category' },
                { data: 'price', name: 'price' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '20%'
                },
            ],
        });
    </script>

@endsection

