<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "calories";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$selectedMonth = isset($_GET['month']) ? $_GET['month'] : '';

if ($selectedMonth === '') {
    $selectedMonth = 'January';
}

$monthMap = [
    'January' => '01',
    'February' => '02',
    'March' => '03',
    'April' => '04',
    'May' => '05',
    'June' => '06',
    'July' => '07',
    'August' => '08',
    'September' => '09',
    'October' => '10',
    'November' => '11',
    'December' => '12',
];

$fetchedData = array();

if (array_key_exists($selectedMonth, $monthMap)) {
    $monthNumber = $monthMap[$selectedMonth];

    $query = "SELECT tanggal, kalori FROM catatanMakanan WHERE MONTH(tanggal) = '$monthNumber'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fetchedData[] = array(
                'tanggal' => $row['tanggal'],
                'kalori' => $row['kalori']
            );
        }
    }
} else {
    $fetchedData = ['error' => 'Invalid month selected'];
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Calories Graphics</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
  <link rel="stylesheet" href="./styles/calories-graphics.css"/>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .calories-graphics-Pph a {
      color: red; 
      font-size: 20px;
    }
    .auto-group-jyar-Lzq a.logout-link {
      color: yellow;
      text-decoration: none;
      font-size: 2rem;
      margin-top: 20px;
      display: block; 
      position: absolute;
      top: 10px; 
      right: 10px; 
    }
  .calories-graphics-Pph .auto-group-rp1t-2Ms .calories-graphics-octobers-Hx1 {
    margin: 0 auto; 
  }
  .logout-link {
      color: yellow;
      text-decoration: none;
      font-size: 2rem;
      margin-top: 20px;
      display: block; 
      position: absolute;
      top: 10px; 
      right: 10px; 
    }
  </style>
</head>
<body>
  <div class="calories-graphics-Pph">
    <div class="auto-group-jyar-Lzq">MyCalorieLog Calories Graphics
    <a href="home.php" class="logout-link">Home</a>
    </div>
    <div class="auto-group-rp1t-2Ms">
    <a href="calories-record.php">Go to Calories Records</a><br><br>
    <div class="auto-group-1tvb-MQ9">
    <p class="filter-stH">Filter</p>
    <select id="monthSelector" class="auto-group-r37b-DhF">
        <option value="01">January 2024</option>
        <option value="12">December 2023</option>
        <option value="11">November 2023</option>
        <option value="10">October 2023</option>
    </select>
  </div>
    <p class="calories-graphics-octobers-Hx1">CALORIES GRAPHICS</p>
    <canvas id="caloriesChart" width="400" height="200"></canvas>
</div>
  </div>
  <script>
    function fetchData(selectedMonth) {
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            var fetchedData = JSON.parse(xhr.responseText);
            renderChart(fetchedData);
          } else {
            console.error('Failed to fetch data:', xhr.statusText);
          }
        }
      };
      xhr.open('GET', 'fetch_data.php?month=' + selectedMonth);
      xhr.send();
    }
    function renderChart(data) {
        var dates = data.map(function(item) {
            return item.tanggal;
        });

        var calories = data.map(function(item) {
            return item.kalori;
        });

        var ctx = document.getElementById('caloriesChart').getContext('2d');

    
        if (window.myChart instanceof Chart) {
            window.myChart.destroy();
        }

        window.myChart = new Chart(ctx, {
            type: 'line',
            data: {
            labels: dates,
            datasets: [{
                label: 'Calories Consumed',
                data: calories,
                borderColor: 'rgb(255, 99, 132)',
                borderWidth: 1,
                fill: false
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
        }
   
    document.getElementById('monthSelector').addEventListener('change', function() {
      var selectedMonth = this.value;
      fetchData(selectedMonth);
    });

    var defaultMonth = document.getElementById('monthSelector').value;
    fetchData(defaultMonth);
  </script>
</body>
</html>