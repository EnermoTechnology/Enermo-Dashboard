@extends('layout.dashboard')

@section('title', 'Vessel Dashboard')

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h3>Operational Summary - {{ config('vessel.name') }}</h3>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Vessel Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h3 class="card-title">Machinery Details</h3>
                        <em class="ml-auto js-last-updated">
                            {{--Last updated at {{ $devices->first()->Date }}--}}
                        </em>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Machinery</th>
                                <th class="select-filter">Category</th>
                                <th>Condition</th>
                                <th>Running</th>
                                <th>U<sub>ab</sub></th>
                                <th>U<sub>bc</sub></th>
                                <th>U<sub>ca</sub></th>
                                <th>I<sub>a</sub></th>
                                <th>I<sub>b</sub></th>
                                <th>I<sub>c</sub></th>
                                <th>I<sub>a</sub>THD</th>
                                <th>I<sub>b</sub>THD</th>
                                <th>I<sub>c</sub>THD</th>
                                <th>F</th>
                                <th>I<sub>unbal</sub></th>
                                <th>KVARH<sub>imp</sub></th>
                                <th>KWH<sub>imp</sub></th>
                                <th>PF<sub>tot</sub></th>
                                <th>P<sub>tot</sub></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td colspan="19" class="text-center">
                                    <i class="fa fa-sync fa-spin"></i>
                                </td>
                            </tr>
                            {{--@foreach($devices as $device)
                                <tr>
                                    <td>{{ $device->Machinery }}</td>
                                    <td>{{ $device->Category }}</td>
                                    <td class="text-center"><i class="ionicons ion-record"></i></td>
                                    <td class="text-center">
                                        <span class="sr-only">{{ $device->running ? 'Running' : 'Not Running' }}</span>
                                        <i class="ionicons ion-record {{ $device->running ? 'text-success' : 'text-danger' }}"></i>
                                    </td>
                                    <td>{{ $device->running ? $device->Uab.'V' : '-' }}</td>
                                    <td>{{ $device->running ? $device->Ubc.'V' : '-' }}</td>
                                    <td>{{ $device->running ? $device->Uca.'V' : '-' }}</td>
                                    <td>{{ $device->running ? $device->Ia.'A' : '-' }}</td>
                                    <td>{{ $device->running ? $device->Ib.'A' : '-' }}</td>
                                    <td>{{ $device->running ? $device->Ic.'A' : '-' }}</td>
                                    <td>{{ $device->running ? $device->IaTHD.'%' : '-' }}</td>
                                    <td>{{ $device->running ? $device->IbTHD.'%' : '-' }}</td>
                                    <td>{{ $device->running ? $device->IcTHD.'%' : '-' }}</td>
                                    <td>{{ $device->running ? $device->F.'Hz' : '-' }}</td>
                                    <td>{{ $device->running ? $device->Iunbal.'%' : '-' }}</td>
                                    <td>{{ $device->running ? $device->KVARHimp.'kvarh' : '-' }}</td>
                                    <td>{{ $device->running ? $device->KWHimp.'kWh' : '-' }}</td>
                                    <td>{{ $device->running ? $device->PFtot : '-' }}</td>
                                    <td>{{ $device->running ? $device->Ptot.'kW' : '-' }}</td>
                                </tr>
                            @endforeach--}}
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Machinery</th>
                                <th>Category</th>
                                <th>Condition</th>
                                <th>Running</th>
                                <th>U<sub>ab</sub></th>
                                <th>U<sub>bc</sub></th>
                                <th>U<sub>ca</sub></th>
                                <th>I<sub>a</sub></th>
                                <th>I<sub>b</sub></th>
                                <th>I<sub>c</sub></th>
                                <th>I<sub>a</sub>THD</th>
                                <th>I<sub>b</sub>THD</th>
                                <th>I<sub>c</sub>THD</th>
                                <th>F</th>
                                <th>I<sub>unbal</sub></th>
                                <th>KVARH<sub>imp</sub></th>
                                <th>KWH<sub>imp</sub></th>
                                <th>PF<sub>tot</sub></th>
                                <th>P<sub>tot</sub></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@push('styles')
    <style>
        .dataTables_length {
            display: inline-block;
            margin-left: 10px;
        }
    </style>
@endpush

@push('scripts')
    <!-- page script -->
    <script>
        function pageScripts() {
            $.extend(true, $.fn.dataTable.Buttons.defaults, {
                dom: {
                    button: {
                        className: 'btn btn-default'
                    }
                }
            });

            var table = $('#example1').DataTable({
                // responsive: true,
                scrollX: true,
                data: window.dashboard_data,
                columns: [
                    {data: 'Machinery'},
                    {data: 'Category'},
                    {
                        className: 'text-center',
                        data: function () {
                            return `<i class="ionicons ion-record text-muted"></i>`;
                        }
                    },
                    {
                        className: 'text-center',
                        data: function (device) {
                            return `<span class="sr-only">${device.running ? 'Running' : 'Not Running'}</span><i class="ionicons ion-record ${device.running ? 'text-success' : 'text-danger'}">`
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.Uab + 'V' : '-';
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.Ubc + 'V' : '-';
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.Uca + 'V' : '-';
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.Ia + 'A' : '-';
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.Ib + 'A' : '-';
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.Ic + 'A' : '-';
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.IaTHD + '%' : '-';
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.IbTHD + '%' : '-';
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.IcTHD + '%' : '-';
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.F + 'Hz' : '-';
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.Iunbal + '%' : '-';
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.KVARH + 'kVARh' : '-';
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.KWH + 'kWh' : '-';
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.PFtot : '-';
                        }
                    },
                    {
                        data: function (device) {
                            return device.running ? device.Ptot + 'kW' : '-';
                        }
                    },
                ],
                order: [[ 3, "desc" ]]
                // rowGroup: {
                //     dataSrc: 1
                // },
                // fixedColumns: true,
                // dom: 'Bfrtip'
            });

            var buttons = new $.fn.dataTable.Buttons(table, {
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print' // 'colvis'
                ]
            });

            var $table = $(table.table().container());

            buttons.container().prependTo(
                $table.find('.col-md-6:eq(0)')
            );

            $table.find('.dataTables_length select:eq(0)').removeClass('form-control-sm').selectpicker();

            table.columns('.select-filter').every(function () {
                var column = this;

                // Create the select list and search operation
                var select = $('<select />')
                    .attr('multiple', 'multiple')
                    .addClass('form-control selectpicker')
                    .data('container', 'body')
                    .data('selectedTextFormat', 'count')
                    .data('actionsBox', true)
                    .appendTo(
                        this.header()
                    )
                    .on('change', function () {
                        var query = $(this).val().join('|');
                        column
                            .search(query, true, false)
                            .draw();

                        table.columns.adjust().draw();
                    });

                // Get the search data for the first column and add to the select list
                this
                    .cache('search')
                    .sort()
                    .unique()
                    .each(function (d) {
                        select.append($(`<option value="${d}">${d}</option>`));
                    });

                select.selectpicker();

                table.columns.adjust().draw();
            });

            $('.js-last-updated').html('Last updated at ' + window.dashboard_data[0].Date);
        }
    </script>
@endpush
