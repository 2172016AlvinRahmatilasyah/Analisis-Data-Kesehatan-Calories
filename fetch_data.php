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
   
    http_response_code(400);
    echo json_encode(['error' => 'Month parameter is missing']);
    exit();
}

$query = "SELECT tanggal, kalori FROM catatanMakanan WHERE MONTH(tanggal) = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $selectedMonth);
$stmt->execute();
$result = $stmt->get_result();


$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}


$stmt->close();
$conn->close();


echo json_encode($data);
?>
