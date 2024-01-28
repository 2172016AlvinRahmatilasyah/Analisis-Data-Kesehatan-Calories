<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
  <link rel="stylesheet" href="./styles/home.css"/>
  <style>
    .logout-link {
      color: red;
      text-decoration: none;
      font-size: 2rem;
      margin-top: 20px;
      display: block; 
      position: absolute;
      top: 10px; 
      right: 10px; 
    }
  </style>
  <script>
    function goToVitaminReminderPage() {
      window.location.href = "vitamin-reminder.php";
    }
    function goToCaloriesGraphicsPage() {
      window.location.href = "calories-graphics.php";
    }

    function goToFoodsPage() {
      window.location.href = "foods.php";
    }
  </script>
</head>
<body>
  <div class="home-iuK">
    <div class="auto-group-pyer-rkd">MyCalorieLog Home Page
      <a href="login.php" class="logout-link">Log Out</a>
    </div>
    <div class="auto-group-obux-iXw">
      <div class="auto-group-w3bb-STw">
        <div class="group-1-Z2m">
          <div class="image-removebg-preview-2-hPs" onclick="goToVitaminReminderPage()"></div>
        </div>
        <div class="group-2-aCm">
          <div class="image-removebg-preview-1-Kg9" onclick="goToCaloriesGraphicsPage()"></div>
        </div>
        <div class="group-3-Qhb">
          <div class="image-removebg-preview-3-M73" onclick="goToFoodsPage()"></div>
        </div>
      </div>
      <div class="auto-group-5udp-qnu">
        <p class="medication-reminder-P3j">
          Vitamin  
          <br/>
          Reminder
        </p>
        <p class="calories-graphic-VcZ">
          Calories 
          <br/>
          Graphic
        </p>
        <p class="foods-ot9">
          Foods
          <br/>
          Recipes 
        </p>
      </div>
    </div>
  </div>
</body>
</html>
