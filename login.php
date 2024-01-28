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

    
    if (empty($inputUsername) || empty($inputPassword)) {
        echo '<script>alert("Username and password must be filled");</script>';
    } else {
        
        $inputUsername = mysqli_real_escape_string($conn, $inputUsername);
        $inputPassword = mysqli_real_escape_string($conn, $inputPassword);

       
        $query = "SELECT * FROM login WHERE Username = '$inputUsername' AND Password = '$inputPassword'";
        $result = $conn->query($query);

        
        if ($result->num_rows > 0) {
       
            header("Location: home.php");
            exit();
        } else {
           
            echo '<script>alert("Invalid username or password");</script>';
        }
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
  <title>Login</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
  <link rel="stylesheet" href="./styles/login.css"/>
  <script>
    function goToHomePage() {
      window.location.href = "home.php";
    }
    function goToSignUpPage() {
      window.location.href = "sign-up.php";
    }
  </script>
</head>
<body>
  <div class="login-pus">
    <div class="rectangle-1-2m3"></div>
    <p class="mycalorielog-7Xb">MyCalorieLog Login</p>
    <form method="post" action="">
      <p class="username-9z5">Username</p>
      <div class="rectangle-2-mEm">
        <input type="text" class="username-input" placeholder="Enter your username" name="username" autocomplete="username" />
      </div> 
      <p class="password-Tjs">Password</p>
      <div class="rectangle-6-RCq">
        <input type="password" class="password-input" placeholder="Enter your password" name="password" autocomplete="current-password" />
      </div>
      <button type="submit" class="rectangle-4-8d3"></button>
      <p class="login-qnM">Login</p>
      <div class="rectangle-5-jsj" onclick="goToSignUpPage()"></div>
      <p class="sign-up-3tR">Sign up</p>
    </form>
  </div>
</body>
</html>
