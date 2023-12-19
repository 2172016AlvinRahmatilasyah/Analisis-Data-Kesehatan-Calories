<?php
// Ganti informasi berikut sesuai dengan konfigurasi database Anda
$host = "localhost";
$username = "root";
$password = "";
$database = "calories";

// Koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Memeriksa apakah form sign-up sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    // Mengamankan data dari SQL injection
    $inputUsername = mysqli_real_escape_string($conn, $inputUsername);
    $inputPassword = mysqli_real_escape_string($conn, $inputPassword);

    // Query untuk menambahkan data ke dalam tabel login
    $query = "INSERT INTO login (Username, Password) VALUES ('$inputUsername', '$inputPassword')";

    if ($conn->query($query) === TRUE) {
        echo '<script>alert("Sign-up successful");</script>';
        header("Location: login.php");
        exit();
    } else {
        echo '<script>alert("Error: ' . $conn->error . '");</script>';
    }
}

// Tutup koneksi database
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Sign Up</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
  <link rel="stylesheet" href="./styles/sign-up.css"/>
  <script>
    document.querySelector('.rectangle-4-t5j').addEventListener('click', function() {
    window.location.href = 'login.php';
  });
  </script>
</head>
<body>
<div class="sign-up-P73">
  <div class="rectangle-1-XDF"></div>
  <p class="mycalorielog-T6u">MyCalorieLog Sign Up</p>
  <!-- Ganti <div> menjadi <form> dan tambahkan action dan method -->
  <form method="post" action="">
    <p class="username-4Mb">Username</p>
    <div class="rectangle-8-SFf">
      <input type="text" class="username-input" placeholder="Enter your username" name="username" />
    </div>  
    <p class="password-mG1">Password</p>
    <div class="rectangle-9-9fs">
      <input type="password" class="password-input" placeholder="Enter your password" name="password" />
    </div>
    <!-- Ganti onClick menjadi type="submit" untuk mengirimkan form -->
    <button type="submit" class="rectangle-4-t5j" ></button><p class="sign-up-QJy">Sign Up</p>
  </form>
</div>
</body>
</html>
