@extends('layout.dashboard')

@section('title', 'Equipment Details')

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h3>{{ config('vessel.name') }} / Equipment View / {{ $device->device_name }}</h3>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Equipment Details</li>
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex">
                        <h3 class="card-title">Passport</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                Machinery:
                            </div>
                            <div class="col-9">
                                <b>{{ $device->device_name }}</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                Type:
                            </div>
                            <div class="col-9">
                                <b>{{ $device->device_desc }}</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                ID / Channel:
                            </div>
                            <div class="col-9">
                                <b>{{ $device->device_id }} / {{ $device->channel_id }}</b>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card">
                    <div class="card-header d-flex">
                        <h3 class="card-title">Condition</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 text-center">Status</div>
                            <div class="col-9 text-center">Max. THD (%)</div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex">
                        <h3 class="card-title">Performance Trend</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 text-center">Last value</div>
                            <div class="col-2 text-center">Change in period</div>
                            <div class="col-8 text-center">Development</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2 text-center js-sensor" data-sensor="Ptot">
                                <b class="sensor-value">
                                    <i class="fa fa-sync fa-spin"></i>
                                    {{--{{ $device->dashboardDevice->Ptot }}--}}
                                </b>
                                <br>
                                Power (kW)
                            </div>
                            <div class="col-2 text-center js-change-marker" data-sensor="Ptot">
                                <span class="change-icon"></span>
                                <br>
                                <b class="change-value"></b>
                            </div>
                            <div class="col-8">
                                <canvas class="js-line-chart" data-sensor="Ptot" width="400px" height="100px"></canvas>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2 text-center js-sensor" data-sensor="PFtot">
                                <b class="sensor-value">
                                    <i class="fa fa-sync fa-spin"></i>
                                    {{--{{ $device->dashboardDevice->PFtot }}--}}
                                </b>
                                <br>
                                PF
                            </div>
                            <div class="col-2 text-center js-change-marker" data-sensor="PFtot">
                                <span class="change-icon"></span>
                                <br>
                                <b class="change-value"></b>
                            </div>
                            <div class="col-8">
                                <canvas class="js-line-chart" data-sensor="PFtot" width="400px" height="100px"></canvas>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2 text-center js-sensor" data-sensor="Ia">
                                <b class="sensor-value">
                                    <i class="fa fa-sync fa-spin"></i>
                                    {{--{{ $device->dashboardDevice->Ia }}--}}
                                </b>
                                <br>
                                Current (A)
                            </div>
                            <div class="col-2 text-center js-change-marker" data-sensor="Ia">
                                <span class="change-icon"></span>
                                <br>
                                <b class="change-value"></b>
                            </div>
                            <div class="col-8">
                                <canvas class="js-line-chart" data-sensor="Ia" width="400px" height="100px"></canvas>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2 text-center js-sensor" data-sensor="Uab">
                                <b class="sensor-value">
                                    <i class="fa fa-sync fa-spin"></i>
                                    {{--{{ $device->dashboardDevice->Uab }}--}}
                                </b>
                                <br>
                                Voltage (V)
                            </div>
                            <div class="col-2 text-center js-change-marker" data-sensor="Uab">
                                <span class="change-icon"></span>
                                <br>
                                <b class="change-value"></b>
                            </div>
                            <div class="col-8">
                                <canvas class="js-line-chart" data-sensor="Uab" width="400px" height="100px"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h3 class="card-title">Operational Time-Series Analysis</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <canvas id="iTHD" width="1200px" height="300px"></canvas>
                        <br>
                        <canvas id="current" width="1200px" height="300px"></canvas>
                        <br>
                        <canvas id="uTHD" width="1200px" height="300px"></canvas>
                        <br>
                        <canvas id="voltage" width="1200px" height="300px"></canvas>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <style>
        .js-line-chart {
            width: 100%;
            max-height: 100px;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/hammerjs@2.0.8/hammer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-zoom@0.7.5/dist/chartjs-plugin-zoom.min.js"></script>
    <script src="{{ asset('js/sma.js') }}"></script>
    <script>
        function pageScripts() {
            window.device = window.dashboard_data.filter(function (device) {
                return device.device_id == window.location.pathname.split('/').reverse()[0];
            })[0];
            // console.log(window.device);

            $('.js-sensor').each(function (index, sensor) {
                // console.log(sensor);
                $(sensor).find('.sensor-value').text(window.device[$(sensor).data('sensor')]);
            });

            $.get('{{ route('api.historical-avg-data') }}').then(function (response) {
                window.histAvgData = response.data.filter(function (d) {
                    return d.device_id == window.device.device_id;
                });

                var labels = [
                    moment().subtract(4, 'day').format('YYYY-MM-DD'),
                    moment().subtract(3, 'day').format('YYYY-MM-DD'),
                    moment().subtract(2, 'day').format('YYYY-MM-DD'),
                    moment().subtract(1, 'day').format('YYYY-MM-DD'),
                    moment().format('YYYY-MM-DD')
                ];

                $('.js-line-chart').each(function (index, chart) {
                    var data = window.histAvgData.filter(function (d) {
                        return d.node_name == $(chart).data('sensor');
                    })[0];
                    // console.log(data);

                    var dataArr = [data.day1, data.day2, data.day3, data.day4, data.day5];

                    var ctx = new Chart($(chart)[0].getContext('2d'), {
                        type: 'line',
                        data: {
                            datasets: [{
                                data: dataArr
                            }],
                            labels: labels
                        },
                        options: {
                            responsive: true,
                            legend: {
                                display: false
                            }
                        }
                    });

                    var icon = data.day5 >= data.day1 ? '<i class="fa fa-caret-up fa-2x"></i>' : '<i class="fa fa-caret-down fa-2x"></i>';
                    var change = ((data.day5 - data.day1) * 100 / data.day1).toFixed(2) + '%';
                    var $marker = $('.js-change-marker[data-sensor=' + $(chart).data('sensor') + ']');
                    $marker.find('.change-value').text(change);
                    $marker.find('.change-icon').html(icon);
                });
            });

            plotGraphs(window.device);
        }

        function plotGraphs(device) {
            $.get('{{ route('api.historical-graph-data') }}?device_id='+device.device_id+'&channel_id=1').then(function (response) {
                // console.log(response.data);
                window.graph_data = response.data;

                var IaTHD = graph_data.filter(function (d) {
                    return d.node_name === 'IaTHD';
                });
                var IaTHD_data = IaTHD.map(function (d) {
                    return d.node_value;
                });
                var IaTHD_labels = IaTHD.map(function (d) {
                    return d.log_dt;
                });
                var IaTHD_sma_data = sma(IaTHD_data, 20);

                var IbTHD = graph_data.filter(function (d) {
                    return d.node_name === 'IbTHD';
                });
                var IbTHD_data = IbTHD.map(function (d) {
                    return d.node_value;
                });
                var IbTHD_sma_data = sma(IbTHD_data, 20);

                var IcTHD = graph_data.filter(function (d) {
                    return d.node_name === 'IcTHD';
                });
                var IcTHD_data = IcTHD.map(function (d) {
                    return d.node_value;
                });
                var IcTHD_sma_data = sma(IcTHD_data, 20);

                var iTHD_graph = new Chart($('#iTHD')[0].getContext('2d'), {
                    type: 'line',
                    data: {
                        datasets: [
                            {
                                label: 'hide',
                                data: IaTHD_data,
                                borderColor: 'rgb(255, 99, 132, 0.2)',
                                // backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                showLine: false,
                                fill: false
                            },
                            {
                                label: 'A',
                                data: (new Array(19).fill(IaTHD_sma_data[0])).concat(IaTHD_sma_data),
                                borderColor: 'rgb(255, 99, 132)',
                                // backgroundColor: 'rgb(255, 159, 64, 0.2)',
                                showLine: true,
                                fill: false
                            },
                            {
                                label: 'hide',
                                data: IbTHD_data,
                                borderColor: 'rgb(54, 162, 235, 0.2)',
                                // backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                showLine: false,
                                fill: false
                            },
                            {
                                label: 'B',
                                data: (new Array(19).fill(IbTHD_sma_data[0])).concat(IbTHD_sma_data),
                                borderColor: 'rgb(54, 162, 235)',
                                // backgroundColor: 'rgb(255, 159, 64, 0.2)',
                                showLine: true,
                                fill: false
                            },
                            {
                                label: 'hide',
                                data: IcTHD_data,
                                borderColor: 'rgb(75, 192, 192, 0.2)',
                                // backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                showLine: false,
                                fill: false
                            },
                            {
                                label: 'C',
                                data: (new Array(19).fill(IcTHD_sma_data[0])).concat(IcTHD_sma_data),
                                borderColor: 'rgb(75, 192, 192)',
                                // backgroundColor: 'rgb(255, 159, 64, 0.2)',
                                showLine: true,
                                fill: false
                            }
                        ],
                        labels: IaTHD_labels
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            labels: {
                                filter: function(item, chart) {
                                    // Logic to remove a particular legend item goes here
                                    return !item.text.includes('hide');
                                }
                            }
                        },
                        title: {
                            display: true,
                            text: 'Current Distortion (%)'
                        },
                        scales: {
                            yAxes: [
                                {
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }
                            ]
                        },
                        plugins: {
                            zoom: {
                                pan: {
                                    enabled: true,
                                    mode: 'x'
                                },
                                zoom: {
                                    enabled: true,
                                    mode: 'x',
                                }
                            }
                        }
                    }
                });

                var Ia = graph_data.filter(function (d) {
                    return d.node_name === 'Ia';
                });
                var Ia_data = Ia.map(function (d) {
                    return d.node_value;
                });
                var Ia_labels = Ia.map(function (d) {
                    return d.log_dt;
                });
                var Ia_sma_data = sma(Ia_data, 20);

                var Ib = graph_data.filter(function (d) {
                    return d.node_name === 'Ib';
                });
                var Ib_data = Ib.map(function (d) {
                    return d.node_value;
                });
                var Ib_sma_data = sma(Ib_data, 20);

                var Ic = graph_data.filter(function (d) {
                    return d.node_name === 'Ic';
                });
                var Ic_data = Ic.map(function (d) {
                    return d.node_value;
                });
                var Ic_sma_data = sma(Ic_data, 20);

                var i_graph = new Chart($('#current')[0].getContext('2d'), {
                    type: 'line',
                    data: {
                        datasets: [
                            {
                                label: 'hide',
                                data: Ia_data,
                                borderColor: 'rgb(255, 99, 132, 0.2)',
                                // backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                showLine: false,
                                fill: false
                            },
                            {
                                label: 'A',
                                data: (new Array(19).fill(Ia_sma_data[0])).concat(Ia_sma_data),
                                borderColor: 'rgb(255, 99, 132)',
                                // backgroundColor: 'rgb(255, 159, 64, 0.2)',
                                showLine: true,
                                fill: false
                            },
                            {
                                label: 'hide',
                                data: Ib_data,
                                borderColor: 'rgb(54, 162, 235, 0.2)',
                                // backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                showLine: false,
                                fill: false
                            },
                            {
                                label: 'B',
                                data: (new Array(19).fill(Ib_sma_data[0])).concat(Ib_sma_data),
                                borderColor: 'rgb(54, 162, 235)',
                                // backgroundColor: 'rgb(255, 159, 64, 0.2)',
                                showLine: true,
                                fill: false
                            },
                            {
                                label: 'hide',
                                data: Ic_data,
                                borderColor: 'rgb(75, 192, 192, 0.2)',
                                // backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                showLine: false,
                                fill: false
                            },
                            {
                                label: 'C',
                                data: (new Array(19).fill(Ic_sma_data[0])).concat(Ic_sma_data),
                                borderColor: 'rgb(75, 192, 192)',
                                // backgroundColor: 'rgb(255, 159, 64, 0.2)',
                                showLine: true,
                                fill: false
                            }
                        ],
                        labels: Ia_labels
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            labels: {
                                filter: function(item, chart) {
                                    // Logic to remove a particular legend item goes here
                                    return !item.text.includes('hide');
                                }
                            }
                        },
                        title: {
                            display: true,
                            text: 'Current (A)'
                        },
                        scales: {
                            yAxes: [
                                {
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }
                            ]
                        },
                        plugins: {
                            zoom: {
                                pan: {
                                    enabled: true,
                                    mode: 'x'
                                },
                                zoom: {
                                    enabled: true,
                                    mode: 'x',
                                }
                            }
                        }
                    }
                });

                var UaTHD = graph_data.filter(function (d) {
                    return d.node_name === 'UaTHD';
                });
                var UaTHD_data = UaTHD.map(function (d) {
                    return d.node_value;
                });
                var UaTHD_labels = UaTHD.map(function (d) {
                    return d.log_dt;
                });
                var UaTHD_sma_data = sma(UaTHD_data, 20);

                var UbTHD = graph_data.filter(function (d) {
                    return d.node_name === 'UbTHD';
                });
                var UbTHD_data = UbTHD.map(function (d) {
                    return d.node_value;
                });
                var UbTHD_sma_data = sma(UbTHD_data, 20);

                var UcTHD = graph_data.filter(function (d) {
                    return d.node_name === 'UcTHD';
                });
                var UcTHD_data = UcTHD.map(function (d) {
                    return d.node_value;
                });
                var UcTHD_sma_data = sma(UcTHD_data, 20);

                var uTHD_graph = new Chart($('#uTHD')[0].getContext('2d'), {
                    type: 'line',
                    data: {
                        datasets: [
                            {
                                label: 'hide',
                                data: UaTHD_data,
                                borderColor: 'rgb(255, 99, 132, 0.2)',
                                // backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                showLine: false,
                                fill: false
                            },
                            {
                                label: 'A',
                                data: (new Array(19).fill(UaTHD_sma_data[0])).concat(UaTHD_sma_data),
                                borderColor: 'rgb(255, 99, 132)',
                                // backgroundColor: 'rgb(255, 159, 64, 0.2)',
                                showLine: true,
                                fill: false
                            },
                            {
                                label: 'hide',
                                data: UbTHD_data,
                                borderColor: 'rgb(54, 162, 235, 0.2)',
                                // backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                showLine: false,
                                fill: false
                            },
                            {
                                label: 'B',
                                data: (new Array(19).fill(UbTHD_sma_data[0])).concat(UbTHD_sma_data),
                                borderColor: 'rgb(54, 162, 235)',
                                // backgroundColor: 'rgb(255, 159, 64, 0.2)',
                                showLine: true,
                                fill: false
                            },
                            {
                                label: 'hide',
                                data: UcTHD_data,
                                borderColor: 'rgb(75, 192, 192, 0.2)',
                                // backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                showLine: false,
                                fill: false
                            },
                            {
                                label: 'C',
                                data: (new Array(19).fill(UcTHD_sma_data[0])).concat(UcTHD_sma_data),
                                borderColor: 'rgb(75, 192, 192)',
                                // backgroundColor: 'rgb(255, 159, 64, 0.2)',
                                showLine: true,
                                fill: false
                            }
                        ],
                        labels: UaTHD_labels
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            labels: {
                                filter: function(item, chart) {
                                    // Logic to remove a particular legend item goes here
                                    return !item.text.includes('hide');
                                }
                            }
                        },
                        title: {
                            display: true,
                            text: 'Voltage Distortion (%)'
                        },
                        scales: {
                            yAxes: [
                                {
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }
                            ]
                        },
                        plugins: {
                            zoom: {
                                pan: {
                                    enabled: true,
                                    mode: 'x'
                                },
                                zoom: {
                                    enabled: true,
                                    mode: 'x',
                                }
                            }
                        }
                    }
                });

                var Uab = graph_data.filter(function (d) {
                    return d.node_name === 'Uab';
                });
                var Uab_data = Uab.map(function (d) {
                    return d.node_value;
                });
                var Uab_labels = Uab.map(function (d) {
                    return d.log_dt;
                });
                var Uab_sma_data = sma(Uab_data, 20);

                var Ubc = graph_data.filter(function (d) {
                    return d.node_name === 'Ubc';
                });
                var Ubc_data = Ubc.map(function (d) {
                    return d.node_value;
                });
                var Ubc_sma_data = sma(Ubc_data, 20);

                var Uca = graph_data.filter(function (d) {
                    return d.node_name === 'Uca';
                });
                var Uca_data = Uca.map(function (d) {
                    return d.node_value;
                });
                var Uca_sma_data = sma(Uca_data, 20);

                var u_graph = new Chart($('#voltage')[0].getContext('2d'), {
                    type: 'line',
                    data: {
                        datasets: [
                            {
                                label: 'hide',
                                data: Uab_data,
                                borderColor: 'rgb(255, 99, 132, 0.2)',
                                // backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                showLine: false,
                                fill: false
                            },
                            {
                                label: 'A',
                                data: (new Array(19).fill(Uab_sma_data[0])).concat(Uab_sma_data),
                                borderColor: 'rgb(255, 99, 132)',
                                // backgroundColor: 'rgb(255, 159, 64, 0.2)',
                                showLine: true,
                                fill: false
                            },
                            {
                                label: 'hide',
                                data: Ubc_data,
                                borderColor: 'rgb(54, 162, 235, 0.2)',
                                // backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                showLine: false,
                                fill: false
                            },
                            {
                                label: 'B',
                                data: (new Array(19).fill(Ubc_sma_data[0])).concat(Ubc_sma_data),
                                borderColor: 'rgb(54, 162, 235)',
                                // backgroundColor: 'rgb(255, 159, 64, 0.2)',
                                showLine: true,
                                fill: false
                            },
                            {
                                label: 'hide',
                                data: Uca_data,
                                borderColor: 'rgb(75, 192, 192, 0.2)',
                                // backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                showLine: false,
                                fill: false
                            },
                            {
                                label: 'C',
                                data: (new Array(19).fill(Uca_sma_data[0])).concat(Uca_sma_data),
                                borderColor: 'rgb(75, 192, 192)',
                                // backgroundColor: 'rgb(255, 159, 64, 0.2)',
                                showLine: true,
                                fill: false
                            }
                        ],
                        labels: Uab_labels
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            labels: {
                                filter: function(item, chart) {
                                    // Logic to remove a particular legend item goes here
                                    return !item.text.includes('hide');
                                }
                            }
                        },
                        title: {
                            display: true,
                            text: 'Voltage (V)'
                        },
                        scales: {
                            yAxes: [
                                {
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }
                            ]
                        },
                        plugins: {
                            zoom: {
                                pan: {
                                    enabled: true,
                                    mode: 'x'
                                },
                                zoom: {
                                    enabled: true,
                                    mode: 'x',
                                }
                            }
                        }
                    }
                });
            });
        }
    </script>
@endpush
