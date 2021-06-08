<!DOCTYPE HTML>
<html>
<head>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>


<div>
    <canvas id="myChart"></canvas>
</div>
</body>
<script>

    const labels = [
        '{{$report[0]->first_day ?? ''}}',
        '{{$report[1]->second_day ?? ''}}',
        '{{$report[2]->third_day ?? ''}}',
        '{{$report[3]->fourth_day ?? ''}}',
        '{{$report[4]->fifth_day ?? ''}}',
        '{{$report[5]->sixth_day ?? ''}}',
        '{{$report[6]->seventh_day ?? ''}}'
    ];
    const data = {
        labels: labels,
        datasets: [{
            label: '# of products',
            backgroundColor: 'white',
            borderColor: 'rgb(255, 99, 132)',
            data: [
                {{$report[0]->first_day_count ?? ''}},
                {{$report[1]->second_day_count ?? ''}},
                {{$report[2]->third_day_count ?? ''}},
                {{$report[3]->fourth_day_count ?? ''}},
                {{$report[4]->fifth_day_count ?? ''}},
                {{$report[5]->sixth_day_count ?? ''}},
                {{$report[6]->seventh_day_count ?? ''}},
               ]
        }]
    };
    const config = {
        type: 'line',
        data,
        options: {}
    };
    // === include 'setup' then 'config' above ===

    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
</html>