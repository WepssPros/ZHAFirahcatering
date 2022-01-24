@extends('layouts.admin')

@section('Dashboard-Content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    {{--  <link rel="stylesheet"  type="text/css" href=" https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">  --}}
    <link rel="stylesheet"  type="text/css" href=" https://cdn.datatables.net/searchpanes/1.4.0/css/searchPanes.dataTables.min.css">
    <link rel="stylesheet"  type="text/css" href=" https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">

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

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>




        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Analisis Pemesanan
        </h2>

{{--  Testing  --}}
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <a href="{{ route('dashboard.laporan.index') }}" class=" bg-gren-500 hover:bg-gren-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                    < Kembali
                </a>
            </div>
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-5 py-5 bg-white sm:p-6">
                    <table id="crudTable1" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nomor</th>
                            <th>Nama Pemesan</th>
                            <th>Produk / Paket</th>
                            <th>Kategori / Paket</th>
                            <th>Tanggal Pemesanan</th>

                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <table id="crudTable2" class="hidden" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Pemesan</th>
                            <th>Produk / Paket</th>
                            <th>Kategori / Paket</th>
                            <th>Tanggal Pemesanan</th>

                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            // Create DataTable
            var table = $('#crudTable1').DataTable({
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
                    [  100, 1000, -1 ],
                    [   '100 Data', '1000 Data', 'Semua' ]
                ],
                ajax: {
                    url: '{!! url()->current() !!}',

                },
                columns: [

                    { data: 'id', name: 'id'},
                    {
                        "data":null, "sortable":true,
                        render : function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart +
                            1
                        }
                    },
                    { data: 'transaction.name', name: 'transaction.name'  },
                    { data: 'product.name', name: 'product.name'  },
                    { data: 'product.category', name: 'product.category' },
                    { data: 'created_at', name: 'created_at' },

                ],
            });

            // Create the chart with initial data
            var container = $('<div/>').insertBefore(table.table().container());
            var chart = Highcharts.chart(container[0], {
                chart: {
                    type: 'pie',
                },
                title: {
                    text: 'Analisis Pemesanan Zhafirah Catering',
                },


                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true
                        },
                        showInLegend: true
                    }
                },

                series: [
                    {
                        name: 'Pesanan Produk Terbanyak : ',
                        data: chartData(table),
                    },
                ],

            });

            // On each draw, update the data in the chart
            table.on('draw', function () {
                chart.series[0].setData(chartData(table));

            });
        });

        function chartData(table) {
            var counts = {};

            // Count the number of entries for each position
            table
                .column(3, { search: 'applied' })
                .data()
                .each(function (val) {
                    if (counts[val]) {
                        counts[val] += 1;
                    } else {
                        counts[val] = 1;
                    }
                });


            // And map it to the format highcharts uses
            return $.map(counts, function (val, key) {
                return {
                    name: key,
                    y: val,
                };
            });

        }
    </script>
{{--  CHARTS USERS  --}}
    <script>
        $(document).ready(function () {
            // Create DataTable
            var table = $('#crudTable2').DataTable({
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [
                    { data: 'id', name: 'id'},
                    { data: 'transaction.name', name: 'transaction.name'  },
                    { data: 'product.name', name: 'product.name'  },
                    { data: 'product.category', name: 'product.category' },
                    { data: 'created_at', name: 'created_at' },

                ],
            });

            // Create the chart with initial data
            var container = $('<div/>').insertBefore(table.table().container());
            var charts = Highcharts.chart(container[0], {
                chart: {
                    type: 'pie',
                },
                title: {
                    text: 'Analisis User Zhafirah Catering' ,
                },
                series: [
                    {
                        name: 'Pelanggan Order : ',
                        data: chartDatas(table),
                    },
                ],
            });

            // On each draw, update the data in the chart
            table.on('draw', function () {
                charts.series[0].setData(chartDatas(table));


            });
        });

        function chartDatas(table) {
            var counts = {};

            // Count the number of entries for each position
            table
                .column(1, { search: 'applied' })
                .data()
                .each(function (val) {
                    if (counts[val]) {
                        counts[val] += 1;
                    } else {
                        counts[val] = 1;
                    }
                });


            // And map it to the format highcharts uses
            return $.map(counts, function (val, key) {
                return {
                    name: key,
                    y: val,
                };
            });
        }
    </script>

@endsection

