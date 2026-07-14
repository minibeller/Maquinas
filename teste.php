<?php
// Database connection details
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "maquinas";

// Create connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
  die("Failed to connect to database: " . mysqli_connect_error());
}
?>

<head>
  <title>Simple Pie Chart from Database</title>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      <?php
      // Connect to database
      include 'connect.php';

      // Query data from database
      $sql = "SELECT setor, COUNT(*) AS total_maquinas FROM maquina GROUP BY setor";
      $result = mysqli_query($conn, $sql);

      // Extract data from query result
      $data = array();
      $data[] = array('Setor', 'Máquinas');
      while ($row = mysqli_fetch_assoc($result)) {
        $setor = $row['setor'];
        $totalMaquinas = $row['total_maquinas'];
        $data[] = array($setor, $totalMaquinas);
      }

      // Convert data to JSON format for Google Charts
      $jsonData = json_encode($data);

      // Close database connection
   
      ?>

      var data = google.visualization.arrayToDataTable(<?php echo $jsonData; ?>);

      var options = {
        title: 'Distribuição de Máquinas por Setor',
        pieHole: 0.4,
        legend: {
          textStyle: {
            fontSize: 12
          }
        }
      };

      var chart = new google.visualization.PieChart(document.getElementById('chartContainer'));
      chart.draw(data, options);
    }
  </script>
</head>
<body>]
    hasgdah
  <div id="chartContainer"></div>
</body>

