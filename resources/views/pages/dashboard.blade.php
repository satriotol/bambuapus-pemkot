@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Selamat Datang, {{ Auth::user()->name }}</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
                @foreach ($statuses as $status)
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">{{ $status->name }}</h6>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h3 class="mb-2">{{ $status->count }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12 grid-margin stretch-card">
                    <a href="{{ route('user_report.create') }}" class="btn btn-primary w-100">Buat Laporan</a>
                </div>
                @unlessrole('USER')
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">TOTAL LAPORAN</h6>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h3 class="mb-2">{{ $total_reports }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">TOTAL PENGGUNA</h6>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h3 class="mb-2">{{ $total_users }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-2">
                            <div class="form-group">
                                <label for="">Tahun</label>
                                <input type="text" name="year" class="form-control" id="year_input" id="">
                            </div>
                            <div class="text-end">
                                <button class="btn btn-primary" id="msg">Cari</button>
                            </div>
                        </div>
                        <div class="col-xl-7 grid-margin grid-margin-xl-0 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Laporan Tahunan</h6>
                                    <canvas id="chartjsGroupedBar1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Laporan Total</h6>
                                    <canvas id="chartjsPie1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                @endunlessrole
            </div>
        </div>
    </div> <!-- row -->
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/chartjs/chart.min.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/chartjs.js') }}"></script>
    <script>
        $(document).ready(function() {
            var datas = {!! json_encode($chart_bar[0]) !!};
            var pie_datas = {{ json_encode($pie_chart) }};
            var colors = {
                primary: "#6571ff",
                secondary: "#7987a1",
                success: "#05a34a",
                info: "#66d1d1",
                warning: "#fbbc06",
                danger: "#ff3366",
                light: "#e9ecef",
                dark: "#060c17",
                muted: "#7987a1",
                gridBorder: "rgba(77, 138, 240, .15)",
                bodyColor: "#000",
                cardBg: "#fff"
            }
            var fontFamily = "'Roboto', Helvetica, sans-serif";
            window.ChartGroup = new Chart($('#chartjsGroupedBar1'), {
                type: 'bar',
                data: {
                    labels: ["JANUARI", "FEBRUARI", "MARET",
                        "APRIL", "MEI", 'JUNI', 'JULI',
                        'AGUSTUS',
                        'SEPTEMBER', 'OKTOBER', 'NOVEMBER',
                        'DESEMBER'
                    ],
                    datasets: datas
                },
                options: {
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: colors.bodyColor,
                                font: {
                                    size: '13px',
                                    family: fontFamily
                                }
                            }
                        },
                    },
                    scales: {
                        x: {
                            display: true,
                            grid: {
                                display: true,
                                color: colors.gridBorder,
                                borderColor: colors.gridBorder,
                            },
                            ticks: {
                                color: colors.bodyColor,
                                font: {
                                    size: 12
                                },
                                beginAtZero: true
                            },
                        },
                        y: {
                            grid: {
                                display: true,
                                color: colors.gridBorder,
                                borderColor: colors.gridBorder,
                            },
                            ticks: {
                                color: colors.bodyColor,
                                font: {
                                    size: 12
                                },
                                beginAtZero: true
                            }
                        }
                    }
                }
            });
            $(function() {
                'use strict';
                window.ChartGroup;
                window.ChartPie = new Chart($('#chartjsPie1'), {
                    type: 'pie',
                    data: {
                        labels: ["PENDING", "PROSES", "SELESAI",
                            "DITOLAK"
                        ],
                        datasets: [{
                            label: "Population (millions)",
                            backgroundColor: [
                                colors.warning,
                                colors.info,
                                colors.success,
                                colors.danger,
                            ],
                            borderColor: colors.cardBg,
                            data: pie_datas
                        }]
                    },
                    options: {
                        plugins: {
                            legend: {
                                display: true,
                                labels: {
                                    color: colors.bodyColor,
                                    font: {
                                        size: '13px',
                                        family: fontFamily
                                    }
                                }
                            },
                        },
                        aspectRatio: 2,
                    }
                });
            });
            $('#msg').click(function(e) {
                var year_input = $('#year_input').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "/dashboard/reports?year=" + year_input,
                    method: 'get',
                    success: function(result) {
                        window.ChartPie.data.datasets[0].data = result[1]
                        window.ChartGroup.data.datasets = result[0];
                        window.ChartGroup.update();
                        window.ChartPie.update();
                    }
                });
            });
        });
    </script>
@endpush
