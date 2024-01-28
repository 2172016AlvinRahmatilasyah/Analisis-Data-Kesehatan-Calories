<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "calories";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

 
    $inputUsername = mysqli_real_escape_string($conn, $inputUsername);
    $inputPassword = mysqli_real_escape_string($conn, $inputPassword);

 
    $query = "INSERT INTO login (Username, Password) VALUES ('$inputUsername', '$inputPassword')";

    if ($conn->query($query) === TRUE) {
        echo '<script>alert("Sign-up successful");</script>';
        header("Location: login.php");
        exit();
    } else {
        echo '<script>alert("Error: ' . $conn->error . '");</script>';
    }
}
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
  <form method="post" action="">
    <p class="username-4Mb">Username</p>
    <div class="rectangle-8-SFf">
      <input type="text" class="username-input" placeholder="Enter your username" name="username" />
    </div>  
    <p class="password-mG1">Password</p>
    <div class="rectangle-9-9fs">
      <input type="password" class="password-input" placeholder="Enter your password" name="password" />
    </div>
    <button type="submit" class="rectangle-4-t5j" ></button><p class="sign-up-QJy">Sign Up</p>
  </form>
</div>
</body>
</html>
