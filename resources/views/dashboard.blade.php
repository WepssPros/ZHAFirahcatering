@extends('layouts.admin')

@section('Dashboard-Content')
<div class="py-1">
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-16">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div class="p-6 sm:px-20 bg-white border-b border-gray-200 text-center items-center">
                <div class="mt-5 text-2xl">
                    <h1> Dashboard Zhafirah Catering </h1>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">

                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2 mb-2">
                            <span class="text-gray-400">Total Users</span>
                            <span class="text-lg font-semibold">{{$customer}} USER</span>
                            <span class="text-gray-400">Aktif Users</span>
                            <span class="text-lg font-semibold">{{$customer}} USER</span>
                        </div>
                        <div class="p-10 bg-gray-200 rounded-md">
                            <svg width="50" height="50" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>

                        </div>
                    </div>
                    <div>
                        <span class="inline-block px-2 text-sm text-white bg-green-500 rounded">{{$customer}}</span>
                        <span>User from 2020</span>
                    </div>
                </div>

                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2 mb-2 ">
                            <span class="text-gray-400">Total Transaksi</span>
                            <span class="text-lg font-semibold">{{$transaction}} TRANSAKSI</span>
                            <span class="text-gray-400">Estimasi Total Pendapatan</span>
                            <span class="text-lg font-semibold">Rp.{{number_format($revenue)}} </span>

                        </div>
                        <div class="p-10 bg-gray-200 rounded-md">
                            <svg width="50" height="50" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>

                        </div>
                    </div>
                    <div>
                        <span class="inline-block px-2 text-sm text-white bg-green-500 rounded">{{$transaction}}</span>
                        <span>Transaction from 2020</span>
                    </div>
                </div>

                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2 mb-2">
                            <span class="text-gray-400">Total Product</span>
                            <span class="text-lg font-semibold">{{$product}} PRODUCT</span>
                            <span class="text-gray-400">Total Category Produk</span>
                            <span class="text-lg font-semibold">{{$product1}} CATEGROY</span>
                        </div>
                        <div class="p-10 bg-gray-200 rounded-md">
                            <svg width="50" height="50" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>

                        </div>
                    </div>
                    <div>
                        <span class="inline-block px-2 text-sm text-white bg-green-500 rounded">{{$product}}</span>
                        <span>Product from 2020</span>
                    </div>
                </div>

                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2 mb-2">
                            <span class="text-gray-400">Status Pesanan </span>
                            <span class="text-lg font-semibold">{{$pesanan}}
                                PENDING
                            </span>
                            <span class="text-lg font-semibold">{{$pesanan1}}
                                FAILED
                            </span>
                            <span class="text-lg font-semibold">{{$pesanan2}}
                                CANCELED
                            </span>
                        </div>
                        <div class="p-10 bg-gray-200 rounded-md">
                            <svg width="50" height="50" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>

                        </div>
                    </div>
                    <div>
                        <span
                            class="inline-block px-2 text-sm text-white bg-green-500 rounded">{{$pesanan + $pesanan1 + $pesanan2}}</span>
                        <span>Status from 2020</span>
                    </div>
                </div>

            </div>

            <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div
                        class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div
                            class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">Pelanggan Setia</p>
                            <p>Zhafirah Catering </p>
                        </div>
                    </div>
                    <table id="crudTable3" class="hidden" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Pemesan</th>
                                <th>Status</th>
                                <th>Produk / Paket</th>
                                <th>Kategori / Paket</th>
                                <th>Tanggal Pemesanan</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

                <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">

                    <div
                        class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div
                            class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">{{$transaction}}</p>
                            <p>Pesanan</p>
                        </div>
                    </div>
                    <table id="crudTable1" class="hidden" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Pemesan</th>
                                <th>Status</th>
                                <th>Produk / Paket</th>
                                <th>Kategori / Paket</th>
                                <th>Tanggal Pemesanan</th>

                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                </div>

                <div class="p-6 border-t border-gray-200">
                    <div
                        class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div
                            class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">{{$product}}</p>
                            <p>Produk yang ada</p>
                        </div>
                    </div>
                    <table id="crudTable2" class="hidden" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Pemesan</th>
                                <th>Status</th>
                                <th>Produk / Paket</th>
                                <th>Kategori / Paket</th>
                                <th>Tanggal Pemesanan</th>

                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

                <div class="p-6 border-t border-gray-200 md:border-l">
                    <div
                        class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div
                            class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">Daftar Harga Terfavorit</p>
                            <p>Harga Paket</p>
                        </div>
                    </div>
                    <table id="crudTable4" class="hidden" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Pemesan</th>
                                <th>Status</th>
                                <th>Produk / Paket</th>
                                <th>Price</th>
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
</div>




{{-- transaction --}}
<script>
    $(document).ready(function () {
        // Create DataTable
        var table = $('#crudTable1').DataTable({


            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'transaction.name',
                    name: 'transaction.name'
                },
                {
                    data: 'transaction.status',
                    name: 'transaction.status'
                },
                {
                    data: 'product.name',
                    name: 'product.name'
                },
                {
                    data: 'product.category',
                    name: 'product.category'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },

            ],
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": true,
            "bAutoWidth": false,
        });

        // Create the chart with initial data
        var container = $('<div/>').insertBefore(table.table().container());
        var chart = Highcharts.chart(container[0], {
            chart: {
                type: 'pie',
            },
            title: {
                text: 'Status Pemesanan',
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

            series: [{
                name: 'Total: ',
                data: chartData(table),
            }, ],

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
            .column(2, {
                search: 'applied'
            })
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
{{-- Produks charts--}}
<script>
    $(document).ready(function () {
        // Create DataTable
        var table = $('#crudTable2').DataTable({


            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'transaction.name',
                    name: 'transaction.name'
                },
                {
                    data: 'transaction.status',
                    name: 'transaction.status'
                },
                {
                    data: 'product.name',
                    name: 'product.name'
                },
                {
                    data: 'product.category',
                    name: 'product.category'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },

            ],

            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": true,
            "bAutoWidth": false,
        });

        // Create the chart with initial data
        var container = $('<div/>').insertBefore(table.table().container());
        var chart = Highcharts.chart(container[0], {
            chart: {
                type: 'pie',
            },
            title: {
                text: 'Produk Populer',
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

            series: [{
                name: 'Pesanan Produk Terbanyak : ',
                data: chartDataProduk(table),
            }, ],

        });

        // On each draw, update the data in the chart
        table.on('draw', function () {
            chart.series[0].setData(chartDataProduk(table));

        });
    });

    function chartDataProduk(table) {
        var counts = {};

        // Count the number of entries for each position
        table
            .column(3, {
                search: 'applied'
            })
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
{{-- user Charts --}}
<script>
    $(document).ready(function () {
        // Create DataTable
        var table = $('#crudTable3').DataTable({


            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'transaction.name',
                    name: 'transaction.name'
                },
                {
                    data: 'transaction.status',
                    name: 'transaction.status'
                },
                {
                    data: 'product.name',
                    name: 'product.name'
                },
                {
                    data: 'product.category',
                    name: 'product.category'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },

            ],
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": true,
            "bAutoWidth": false,
        });

        // Create the chart with initial data
        var container = $('<div/>').insertBefore(table.table().container());
        var chart = Highcharts.chart(container[0], {
            chart: {
                type: 'pie',
            },
            title: {
                text: 'Data Pelanggan',
            },

            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true
                    },
                    showInLegend: false
                }
            },

            series: [{
                name: 'Total Pesanan : ',
                data: chartDataUser(table),
            }, ],

        });

        // On each draw, update the data in the chart
        table.on('draw', function () {
            chart.series[0].setData(chartDataUser(table));

        });
    });

    function chartDataUser(table) {
        var counts = {};

        // Count the number of entries for each position
        table
            .column(1, {
                search: 'applied'
            })
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
{{-- Pendapatan --}}
<script>
    $(document).ready(function () {
        // Create DataTable
        var table = $('#crudTable4').DataTable({


            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'transaction.name',
                    name: 'transaction.name'
                },
                {
                    data: 'transaction.status',
                    name: 'transaction.status'
                },
                {
                    data: 'product.name',
                    name: 'product.name'
                },
                {
                    data: 'product.price',
                    name: 'product.price',
                    render: $.fn.dataTable.render.number(',', '.', 0, 'Rp.'),
                },
                {
                    data: 'product.category',
                    name: 'product.category'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },

            ],
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": true,
            "bAutoWidth": false,
        });

        // Create the chart with initial data
        var container = $('<div/>').insertBefore(table.table().container());
        var chart = Highcharts.chart(container[0], {
            chart: {
                type: 'pie',
            },
            title: {
                text: 'Daftar Harga Perporsi Favorit',
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

            series: [{
                name: 'Total Pesanan : ',
                data: chartDataduit(table),
            }, ],


        });

        // On each draw, update the data in the chart
        table.on('draw', function () {
            chart.series[0].setData(chartDataduit(table));

        });
    });

    function chartDataduit(table) {
        var counts = {};

        // Count the number of entries for each position
        table
            .column(4, {
                search: 'applied'
            })
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
