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
        '{{$report[0]->date ?? ''}}',
        '{{$report[1]->date ?? ''}}',
        '{{$report[2]->date ?? ''}}',
        '{{$report[3]->date ?? ''}}',
        '{{$report[4]->date ?? ''}}',
        '{{$report[5]->date ?? ''}}',
        '{{$report[6]->date ?? ''}}'
    ];
    const data = {
        labels: labels,
        datasets: [{
            label: '# of products',
            backgroundColor: 'white',
            borderColor: 'rgb(255, 99, 132)',
            data: [
                {{$report[0]->count ?? ''}},
                {{$report[1]->count ?? ''}},
                {{$report[2]->count ?? ''}},
                {{$report[3]->count ?? ''}},
                {{$report[4]->count ?? ''}},
                {{$report[5]->count ?? ''}},
                {{$report[6]->count ?? ''}},
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