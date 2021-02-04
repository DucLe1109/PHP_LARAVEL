{{--<!doctype html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Bar Chart</title>--}}
{{--    <script src="http://www.chartjs.org/dist/2.7.3/Chart.bundle.js"></script>--}}
{{--    <script src="http://www.chartjs.org/samples/latest/utils.js"></script>--}}
{{--    <style>--}}
{{--        canvas {--}}
{{--            -moz-user-select: none;--}}
{{--            -webkit-user-select: none;--}}
{{--            -ms-user-select: none;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="container" style="width: 85%;">--}}
{{--    <canvas id="canvas"></canvas>--}}
{{--</div>--}}
{{--<script>--}}
{{--    var chartdata = {--}}
{{--        type: 'bar',--}}
{{--        data: {--}}
{{--            labels: <?php echo json_encode($Months); ?>,--}}
{{--            // labels: month,--}}
{{--            datasets: [--}}
{{--                {--}}
{{--                    label: 'Lợi Nhuận',--}}
{{--                    backgroundColor: '#26B99A',--}}
{{--                    borderWidth: 1,--}}
{{--                    data: <?php echo json_encode($Data); ?>--}}
{{--                }--}}
{{--            ]--}}
{{--        },--}}
{{--        options: {--}}
{{--            scales: {--}}
{{--                yAxes: [{--}}
{{--                    ticks: {--}}
{{--                        beginAtZero:true--}}
{{--                    }--}}
{{--                }]--}}
{{--            }--}}
{{--        }--}}
{{--    }--}}
{{--    var ctx = document.getElementById('canvas').getContext('2d');--}}
{{--    new Chart(ctx, chartdata);--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}




{{--    <!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">--}}
{{--    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
{{--    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>--}}
{{--    <script type="text/javascript">--}}
{{--        $( function() {--}}
{{--            $( "#datepicker" ).datepicker({--}}
{{--                prevText:"Tháng trước",--}}
{{--                nextText:"Tháng sau",--}}
{{--                dateFormat:"yy-mm-dd",--}}
{{--                dayNamesMin:["Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy","Chủ Nhật"],--}}
{{--                duration:"fast"--}}
{{--            });--}}
{{--            $( "#datepicker2" ).datepicker({--}}
{{--                prevText:"Tháng trước",--}}
{{--                nextText:"Tháng sau",--}}
{{--                dateFormat:"yy-mm-dd",--}}
{{--                dayNamesMin:["Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy","Chủ Nhật"],--}}
{{--                duration:"fast"--}}
{{--            });--}}

{{--        } );--}}
{{--    </script>--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container-fluid">--}}
{{--    <style type="text/css">--}}
{{--        p.title_thongke{--}}
{{--            text-align: center;--}}
{{--            font-size: 25px;--}}
{{--            font-weight: bold;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <div class="row">--}}
{{--        <p class="title_thongke">Thông Kê Doanh Số</p>--}}

{{--           <form autocomplete="off">--}}
{{--            @csrf--}}
{{--                <div class="col-md-2">--}}
{{--                    <p>Từ Ngày :<input type="datetime-local" id="datepicker" class="form-control"></p>--}}

{{--                </div>--}}
{{--                <div class="col-md-2">--}}
{{--                    <p>Đến Ngày :<input type="datetime-local" id="datepicker2" class="form-control"></p>--}}
{{--                    <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lọc kết quả">--}}
{{--                </div>--}}
{{--             </form>--}}
{{--        <div class="col-md-12">--}}
{{--             <div id="myfirstchart" style="height: 250px;"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<script type="text/javascript">--}}
{{--    $(document).ready(function (){--}}
{{--       var chart = new Morris.Line({--}}
{{--            // ID of the element in which to draw the chart.--}}
{{--            element: 'myfirstchart',--}}
{{--            // Chart data records -- each entry in this array corresponds to a point on--}}
{{--            // the chart.--}}
{{--            data: [--}}
{{--                { year: '2008', value: 20 },--}}
{{--                { year: '2009', value: 10 },--}}
{{--                { year: '2010', value: 5 },--}}
{{--                { year: '2011', value: 5 },--}}
{{--                { year: '2012', value: 20 }--}}
{{--            ],--}}
{{--            // The name of the data record attribute that contains x-values.--}}
{{--            xkey: 'year',--}}
{{--            // A list of names of data record attributes that contain y-values.--}}
{{--            ykeys: ['value'],--}}
{{--            // Labels for the ykeys -- will be displayed when you hover over the--}}
{{--            // chart.--}}
{{--            labels: ['Value']--}}
{{--        });--}}


{{--    $('#btn-dashboard-filter').click(function (){--}}
{{--       var _token = $('input[name="_token"]').val();--}}
{{--      var from_date= $('#datepicker').val();--}}
{{--       var to_date= $('#datepicker2').val();--}}
{{--        $.ajax({--}}
{{--           url:"{{url('/chartjs')}}",--}}
{{--           method:"GET",--}}
{{--           dataType:"JSON",--}}
{{--           data:{from_date:from_date,to_date:to_date,_token:_token},--}}

{{--           success:function(data){--}}
{{--              chart.setData(data);--}}
{{--           }--}}
{{--       })--}}
{{--    });--}}

{{--    });--}}
{{--    </script>--}}

{{--</body>--}}
{{--</html>--}}


@extends('admin.home')
@section('content')
    <!-- Main Application (Can be VueJS or other JS framework) -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <canvas id="reportChart" width="500" height="300" style="max-height: 600px !important;">
                    </canvas>
                    <!-- End Of Main Application -->
                </div>
                <h2 style="text-align: center;"> Biểu đồ doanh thu tháng 12 năm 2020</h2>
            </div>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
    {{-- {!! $chart->script() !!} --}}
    <script type="text/javascript">
        var reportChart=document.getElementById('reportChart');
        var myChart = new Chart(reportChart, {
            type: 'bar',
            data: {
                //labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6','Tháng 7','Tháng 8','Tháng 9','Tháng 10','Tháng 11','Tháng 12',],
                 labels:['Ngày 1','Ngày 2','Ngày 3','Ngày 4','Ngày 5','Ngày 6','Ngày 7','Ngày 8','Ngày 9','Ngày 10','Ngày 11','Ngày 12','Ngày 13','Ngày 14','Ngày 15','Ngày 16','Ngày 17','Ngày 18','Ngày 19','Ngày 20','Ngày 21','Ngày 22','Ngày 23','Ngày 24','Ngày 25','Ngày 26','Ngày 27','Ngày 28','Ngày 29','Ngày 30','Ngày 31'],
                {{--//labels:<?php echo json_encode($Months); ?>,--}}
               xLabelFormat:90,
                datasets: [{
                    label: 'Lợi Nhuận',
                    data: <?php echo json_encode($Data); ?>,
                    backgroundColor: [
                        'rgb(255,99,130)',
                        'rgb(108,54,235)',
                        'rgb(255,86,106)',
                        'rgb(192,75,186)',
                        'rgb(227,102,255)',
                        'rgb(255,86,64)',
                        'rgb(255,172,99)',
                        'rgb(229,235,54)',
                        'rgb(86,255,168)',
                        'rgb(75,128,192)',
                        'rgb(250,27,202)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],

                    borderWidth: 1,


                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        }
                    }]
                }
            }
        });
    </script>
@endsection
