<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Foods</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A700"/>
  <link rel="stylesheet" href="./styles/foods.css"/>
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
  </style>
   <script>
    function goToCaesarSalad() {
      window.location.href = 'caesarSalad.php';
    };
    function goToJus() {
      window.location.href = 'jus.php';
    };
    function goToFruitSalad() {
      window.location.href = 'fruitSalad.php';
    };
    function goToHealthyMealbox() {
      window.location.href = 'healthyMealbox.php';
    };
    function goToVegetablesPeanutSauce() {
      window.location.href = 'vegetablePeanutSauce.php';
    };
    function goToHealthySandwich() {
      window.location.href = 'healthySandwich.php';
    };
    function goToEggSalad() {
      window.location.href = 'eggSalad.php';
    };
    function goToOverOvernightOatmeal() {
      window.location.href = 'overnightOatmeal.php';
    };
  </script>
</head>
<body>
<div class="foods-bzD">
  <div class="auto-group-m9sj-MiV">MyCalorieLog Food Recipes
  <a href="home.php" class="logout-link">Home</a>
  </div>
  <p class="low-calorie-food-recipes-q7s">Low Calorie Food Recipes</p>
  <div class="auto-group-qrch-xiH">
    <div class="auto-group-mtkx-6Jh">
      <div class="group-10-oyo">
      <div class="image-removebg-preview-1-1-kPF" onClick="goToCaesarSalad()">
        </div>
      </div>
      <div class="group-11-REV">
        <div class="image-removebg-preview-1-2-LsF" onClick="goToJus()">
        </div>
      </div>
      <div class="group-12-drM">
        <div class="image-removebg-preview-1-3-NZ3" onClick="goToFruitSalad()">
        </div>
      </div>
      <div class="group-13-sEu">
        <div class="image-removebg-preview-1-4-pA9" onClick="goToHealthyMealbox()">
        </div>
      </div>
    </div>
    <div class="auto-group-cwob-Vn5">
      <p class="caesar-salad-dNV">Caesar Salad</p>
      <p class="juice-9rd">Juice</p>
      <p class="fruit-salad-tJR">Fruit Salad</p>
      <p class="healthy-mealbox-owB">Healthy Mealbox</p>
    </div>
    <div class="auto-group-y3lq-wnV">
      <div class="group-14-fiV">
        <div class="image-removebg-preview-2-1-Qg5" onClick="goToVegetablesPeanutSauce()">
        </div>
      </div>
      <div class="group-15-hfB">
        <div class="image-removebg-preview-2-2-Ev1" onClick="goToHealthySandwich()">
        </div>
      </div>
      <div class="group-16-wJd">
        <div class="image-removebg-preview-2-4-si5" onClick="goToEggSalad()">
        </div>
      </div>
      <div class="group-17-Nuj">
        <div class="image-removebg-preview-2-3-76d" onClick="goToOverOvernightOatmeal()">
        </div>
      </div>
    </div>
    <div class="auto-group-q87p-PZw">
      <p class="mix-vegetable-and-peanut-sauce-YBw">
      Mix Vegetable
      <br/>
      and Peanut Sauce
      </p>
      <p class="healthy-sandwich-pv9">Healthy Sandwich</p>
      <p class="egg-salad-Y5T">Egg Salad</p>
      <p class="overnight-oatmeal-rbw">Overnight Oatmeal</p>
    </div>
  </div>
</div>
</body>