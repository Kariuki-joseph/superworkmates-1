<!DOCTYPE html>
<html lang="eng">
  
<head>      
<link rel="stylesheet" href="css/mainstyles.css">
<title> Superworkmates: You Don't Have to Work Alone! </title>


</head>
<body>
<?php
include_once 'parts/header.php';
?>
      

<!--Part 2-->
    <div class="sehemu2">
      <div class="a" style="background-image:url(images/flower1.jpg);">
        <h2>Welcome</h2>
        <h2>To</h2>
        <h2>Superworkmates</h2>
        <h3>You Don't Have To Work Alone!</h3>
      </div>
<!--log in-->
      <div class="b">
          <div class="b-image">
            <img src="./images/slogo.png" alt="Superworkmates">
          </div>

<?php

  if (isset ($_SESSION ['username'])) {
    include_once 'loggedin.php';
    
  }
  else {
   include_once 'loginorsignup.php';
  }
  ?>

<!--Part 3-->
<div class="part3"> 
  <div class="p3a">
    <h2>Contact Us</h2> 
    <div class="p3atext">
      <p>Reach us on WhatsApp on +254 729 515 273 Or +254 758 826 552.</p>
      <p>Email us at <a href="mailto: support@superworkmates.com">support@superworkmates.com.</a> </p>
      <p>Visit us at Climax Electronics and Cyber, Ngorika.</p>
      </div>
  </div>

  <div class="p3b">
    <h2>About Us</h2>
    <div class="p3btext">
      <p>We believe that each of our expertise, knowledge and daily experiences put together productively are the builders of a better tomorrow.</p>
      <a href="about.php"> <button>Read More</button> </a>
    </div>
  </div>
  
</div>

<!--Part 4-->
<div class="part4">
  <div class="p4head">
      <h2>Trends</h2>
  </div>

  <div class="p4">
    <div class="p4a">
      <div class="p4aa">
        <h4>Trend 1</h4>
        <img src="./images/blue.jpg" alt="image missing">
        <p>Start Now. The future has began!</p> 
      </div>
    </div>

    <div class="p4b">
      <div class="p4ba">
        <h4>Trend 2</h4>
        <img src="./images/flower.jpg" alt="image missing"> 
        <p>For guidance on personal, business and social projects - Superworkmates is the place!</p>
      </div>
    </div>

    <div class="p4c">
      <div class="p4ca">
        <h4>Trend 3</h4>
        <img src="./images/lights.jpg" alt="Image missing">
        <p>Stronger Together</p>
      </div>
    </div>

  </div>

</div>

<!--footer-->

<?php
include_once 'parts/footer.php';
?>
</body>
</html>