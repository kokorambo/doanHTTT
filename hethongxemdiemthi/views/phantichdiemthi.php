<html>
<head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load('visualization', '1.1', {packages: ['line']});
        google.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = new google.visualization.DataTable();
            data.addColumn('number', 'Điểm');
            data.addColumn('number', 'Toán');
            data.addColumn('number', 'Lý');
            data.addColumn('number', 'Hóa');
            data.addColumn('number', 'Anh');

            data.addRows([
                [0, 100, 80.8, 41.8, 30],
                [1, 37.8, 80.8, 41.8, 48],
                [2, 30.9, 69.5, 32.4, 30.9],
                [3, 25.4, 57, 25.7, 69.8],
                [4, 11.7, 18.8, 10.5, 89.7],
                [5, 11.9, 17.6, 10.4, 78.6],
                [6, 8.8, 13.6, 7.7, 67.8],
                [7, 7.6, 12.3, 9.6, 80.6],
                [8, 12.3, 29.2, 10.6, 56.9],
                [9, 16.9, 42.9, 14.8, 36.9],
                [10, 12.8, 30.9, 11.6, 67.8]
            ]);

            var options = {
                chart: {
                    title: 'Phổ điểm các môn thi',
                    subtitle: 'Kỳ thi THPT Quốc Gia'
                },
                width: 900,
                height: 500
            };

            var chart = new google.charts.Line(document.getElementById('linechart_material'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="linechart_material"></div>
</body>
</html>