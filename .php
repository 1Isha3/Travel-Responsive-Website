<!DOCTYPE html>
<html>
<head>
<title>food</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
</head>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-center w3-padding-16"><b><centre> FOOD BY US</centre></b></div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1400px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="san.jpg" alt="Sandwich" width="300" height="300">
      <h3>THE REAL SANDWICH !</h3>
      <p>Explore the best sandwich by our chefs from across the world .</p>
    </div>
    <div class="w3-quarter">
      <img src="pastaa.jpg" alt="Steak" width="300" height="300">
      <h3>PASTA KA VASTA !</h3>
      <p>Taste the hottest and spiciest brocolli pasta . </p>
    </div>
    <div class="w3-quarter">
      <img src="cherries.png" alt="Cherries" width="300" height="300">
      <h3>CHERRIES , UNINTERUPTED</h3>
      <p>Nothing is best then the organically grown juiciest cherries in farm.</p>
    </div>
    <div class="w3-quarter">
      <img src="wine.png" alt="Pasta and Wine" width="300" height="300">
      <h3>ONCE AGAIN THE FINEST WINE OF THE WORLD!</h3>
      <p>Explore the fineest wines of the world directlty from the wineyards.</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="icecream.png" alt="Popsicle" width="300" height="300">
      <h3>ALL I NEED IS A POPSICKLE !</h3>
      <p>Tate the best ice- creams from the corners of the world.</p>
    </div>
    <div class="w3-quarter">
      <img src="salmon.png" alt="Salmon" width="300" height="300">
      <h3>SALMON FOR YOUR SKIN</h3>
      <p>Taking care of your skin while travelling is the good habbit.</p>
    </div>
    <div class="w3-quarter">
      <img src="ramyun.png" alt="Sandwich" width="300" height="300">
      <h3>THE RAMYUN !</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="toast.png" alt="toast" width="300" height="300">
      <h3>LE FRENCH ! </h3>
      <p>Taste the finest toast with hot chocolate of france.</p>
    </div>
  </div>

  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h2><b><u>ABOUT ME,THE FOOD MAN</u></b></h2><br>
    <img src="ch.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h4><b>I am Who I Am!</b></h4>
      <h6><i>With Passion For Real, Good Food</i></h6>
      <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of cooking and sharing my dishes with pepople across the world. I want to share my world with you. Prently i am working as a chef with <b>'TRAVELL'</b> tourist company. I have met wonerfull people with whom I have shared my life experience with food abd my journey . It has been wonderful opportunity for me and i seek on moving forward always.
    </div>
  </div>
  <hr>
  


<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
