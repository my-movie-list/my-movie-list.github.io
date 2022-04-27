<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<?php session_start() ?>
</head>
<style>
body {
font-family: "Times New Roman", Times, serif;
font-weight: bolder;
font-size: medium;
}
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #318ebd;
  overflow-x: hidden;
  border: 2px solid #111;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #111;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<div class="main">
<body style="background-image: linear-gradient(#99d3f0, #318ebd)">
<div class="sidenav">
  <a href="index.php">Home</a>
  <a href="movie.php">Movies</a>
  <a href="signup.html">My Account</a>
  <a href="favorites.php">My Favorites</a>
  <a href="signout.php">Logout</a>
</div>
<!-- Navigation 
<nav class="w3-bar w3-light-blue">
  <a href="#home" class="w3-button w3-bar-item">Home</a>
  <a href="#band" class="w3-button w3-bar-item">Movies</a>
  <a href="#tour" class="w3-button w3-bar-item">Genres</a>
  <a href="#contact" class="w3-button w3-bar-item">Actors</a>
  <a href="#contact" class="w3-button w3-bar-item">My Account</a>
  <a href="#contact" class="w3-button w3-bar-item">My Favorites</a>
</nav>-->

<!-- Website Description -->
<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 class="w3-wide">MY MOVIE LIST</h2>
  <p class="w3-justify">My Movie List is an all-in-one, cross-platform service for tracking the movies you’ve watched, enjoyed, and wish to know more about.
</p>
<p class="w3-opacity"><i>Trending Movies</i></p>
</section>

<?php

if(isset($_GET['user'])){
  $_SESSION['user']=$_GET['user'];
}

?>

<!--Image Carousel -->
<section class="w3-container w3-center w3-content" style="max-width:600px" style="max-height:200px">
  <img class="images" src="lostcity.jpg"
  style="width:100%" style="height:50%">
  <img class="images" src="batman.jpg"
  style="width:100%">
  <img class="images" src="uncharted.jpg"
  style="width:100%">
</section> 

<?php
// Import top 100 trending movies from IMDb, then filtered to top 10
// NOTE: API keys for IMDb allow 100 free requests per day - if maximum is reached, switch to another API key.
// Josef - k_u83w1u0o
// Connor - k_1nw7v1rh

    $json_url = "https://imdb-api.com/en/API/MostPopularMovies/k_1nw7v1rh";
    $json = file_get_contents($json_url);
    $json=str_replace('}, ]',"}]",$json);
    $data = json_decode($json, true);
    $results = $data;
    $limit = 0;

    foreach($results['items'] as $result) {
        if($limit < 10){
            foreach ($result as $key => $value) {
                if(($key == 'rank') or ($key == "title")){
                    echo $key."-".$value."<br />";
                }
            }
            echo "<br/>";
            $limit++;
        }
    }
?>

<!-- Website Functions  -->
<section class="w3-row-padding w3-center w3-light-blue">
  <article class="w3-third">
    <p>Discover The Cast</p>
    <img src="actor.jpg" alt="actor" style="width:100%">
    <p>Learn who plays your favorite roles and characters.</p>
  </article>
  <article class="w3-third">
    <p>Pick Your Favorites</p>
    <img src="favorites.png" alt="favorite" style="width:100%">
    <p>Create a list of your films enjoyed the most, so they are easily accessible.</p>
  </article>
   <article class="w3-third">
    <p>Browse Movies</p>
    <img src="movies.jpg" alt="movies" style="width:100%">
    <p>Search through our database to discover a forgotten movie or, perhaphs discover new ones.</p>
  </article>
  
</section>
</div>
<script>
// Image Carousel- every 3 sec
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("images");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
<footer class="w3-container w3-padding-64 w3-center w3-blue w3-xlarge">
<p> Team 2: My Movie List </p>
</footer>
</body>

</html>
<!--<section class="slideshow-container">

<section class="images fade">
  <section class="numbertext">1 / 3</div>
  <img src="lostcity.jpg" style="width:50%">
  <section class="text">The Lost City</div>
</section>

<section class="images fade">
  <section class="numbertext">2 / 3</div>
  <img src="batman.jpg" style="width:50%">
  <section class="text">The Batman</div>
</section>

<section class="images fade">
  <section class="numbertext">3 / 3</div>
  <img src="uncharted.jpg" style="width:50%">
  <section class="text">Uncharted</div>
</section>

</section>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div> -->