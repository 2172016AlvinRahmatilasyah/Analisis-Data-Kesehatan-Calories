<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Vitamin Reminder</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A700"/>
  <link rel="stylesheet" href="./styles/vitamin-reminder.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <style>
    .input-field {
  width: 100%; 
  padding: 8px; 
  box-sizing: border-box; 
  border: 1px solid #ccc; 
  border-radius: 4px; 
  font-size: 16px; 
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
  <div class="vitamin-reminder-w8R">
    <div class="auto-group-xpbw-tJZ">MyCalorieLog Vitamin Reminder Input
      <a href="home.php" class="logout-link">Home</a>
    </div>
    <p class="vitamin-info--krZ">Vitamin info :</p>
  </div>
  <form method="post" action="send-email.php">
        <label for="name">Name :</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
               
        <label for="message">Nama vitamin :</label>
        <input type='text' name="message" id="message" required></input>
        
        <br>
        
        <button>Send</button>
    </form>
</body>
</html>
