<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "calories";

$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getUsername()
{
    global $conn; 

    $query = "SELECT Username FROM login LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['Username'];
    } else {
        return false;
    }
}

$Username = getUsername();
if ($Username !== false) {
    echo "Username: " . $Username;
} else {
    echo "Failed to retrieve username.";
}


function getDaftarMakanan()
{
    global $conn;

    $query = "SELECT NamaMakanan FROM daftarKalori";
    $result = mysqli_query($conn, $query);

    $daftarMakanan = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $daftarMakanan[] = $row['NamaMakanan'];
    }

    return $daftarMakanan;
}


function getJumlahKalori($namaMakanan)
{
    global $conn;

    $query = "SELECT kalori FROM daftarKalori WHERE NamaMakanan = '$namaMakanan'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $jumlahKalori = $row['kalori'];

        return array('food_name' => $namaMakanan, 'kalori' => $jumlahKalori);
    } else {
        return false;
    }
}

function tambahCatatanMakanan($namaMakanan, $tanggal)
{
    global $conn;

    $Username = getUsername();
    $kaloriInfo = getJumlahKalori($namaMakanan);

    if ($kaloriInfo !== false) {
        $kalori = $kaloriInfo['kalori'];

        $sql = "INSERT INTO catatanMakanan (nama, tanggal, NamaMakanan, kalori) VALUES ('$Username', '$tanggal', '$namaMakanan', $kalori)";

        echo "SQL Query: $sql";
        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil ditambahkan ke tabel catatanMakanan";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Failed to retrieve calorie count for $namaMakanan.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        $namaMakanan = $_POST["food_name"];
        $tanggal = $_POST["tanggal"]; 
        tambahCatatanMakanan($namaMakanan, $tanggal);
    }
}

$daftarMakanan = getDaftarMakanan();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Calories Record</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A700"/>
  <link rel="stylesheet" href="./styles/calories-record.css"/>
  <style>
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

    .input-field {
      width: 100%; 
      padding: 8px; 
      box-sizing: border-box; 
      border: 1px solid #ccc; 
      border-radius: 4px; 
      font-size: 16px; 
    }
    .auto-group-wtvu-eAq {
      margin-top: -130px; 
    }
    button[type="submit"] {
      background-color: #09467e;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
    <div class="calories-record-Kuw">
        <div class="auto-group-shhf-sRf">MyCalorieLog CALORIES RECORD
            <a href="home.php" class="logout-link">Home</a>
        </div>
        <div class="auto-group-3qlm-HVP">
            <form method="post">
                <div class="auto-group-ypxv-1gH">
                    <p class="date--x5j">Date :</p>
                    <input type="date" class="input-field" name="tanggal">
                </div>
                <div class="auto-group-vlvq-QyK">
                    <p class="food--jkh">Food :</p>
                    <div class="auto-group-xqfo-H1X">
                        <select class="input-field" name="food_name">
                            <?php
                            foreach ($daftarMakanan as $makanan) {
                                echo '<option value="' . $makanan . '">' . $makanan . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="auto-group-wtvu-eAq">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>