<?php
// Example stock data (replace this with your actual data retrieval logic)
$stock_data = array(
    array('Clothing', 'Quantity'),
    array('UiTM Lioness V3', 50),
    array('UiTM Lioness V1', 30),
    array('UiTM Lioness V2', 40),
    array('KPPIM Jersey', 20),
    array('UiTM Black', 60),
    array('Korporat FSG', 45),
    array('Korporat KPPIM', 35),
    array('Korporat FP', 55),
    array('Korporat BASCO', 25),
    array('Korporat DiSK', 15),
    array('Korporat MASSCOM', 40),
    array('Korporat EEC', 30),
    array('UiTM Muslimah Jersey', 20),
    array('UiTM Long Sleeve', 30),
    array('KPPIM Jersey V2', 25),
    array('KPPIM Jersey V3', 35),
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Clothes Chart</title>
    <!-- Load Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(<?php echo json_encode($stock_data); ?>);

            var options = {
                title: 'Stock of Clothes',
                pieHole: 0.4,
                sliceVisibilityThreshold: 0.05 // Only smaller slices will be visible
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <!-- Chart Container -->
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>
