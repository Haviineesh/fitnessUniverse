<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
    unset($_SESSION['login_user']);
  	unset($_SESSION['username']);
    header('Cache-Control: no-cache, must-revalidate');
  	header("location: FitnessUniverse.html");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/eecc635fae.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <title>Fitness Universe</title>
</head>

<body> 
    <?php if(isset($_SESSION['success'])) : ?>

    <div>

        <h3>

            <?php

            echo $_SESSION['success'];
            unset($_SESSION['success']);

            ?>
        </h3>
    </div>
<?php endif ?>

 <!-- logged in user information -->
    <header>

<nav>
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#feature">Features</a></li>
    <li><a href="#about">About Us</a></li>
    <li><a href="#gallery">Gallery</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#footer">Footer</a></li>
  </ul>
</nav>

<div class="fas fa-bars"></div>

<div class="logo">
  <a href="#"><img src="logo.jpg"></a>
</div>

</header>


<section id="home">
<?php if(isset($_SESSION['username'])) : ?>

<h1>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1>
<h3>- No Pain No Gain -</h3>
<a href="FitnessUniverse.html?logout='1'"><button name= 'logout_user'>Log out</button></a>

<?php endif ?>


<div class="icons">
  <a href="https://www.facebook.com/CelebrityFitnessMalaysia/" target="_blank" class="fab fa-facebook"></a>
  <a href="#" class="fab fa-twitter"></a>
  <a href="#" class="fab fa-pinterest"></a>
</div>


</section>


<section id="feature">

<h1>features</h1>

<div class="card-container">

<div class="card">
  <img src="p1.jpg" alt="">
  <div class="content">
    <h1>workout sessions</h1>
    <p>We are providing more workout sessions for you to try. Whatever type of of workout you're looking for, you'll find it here. </p>
    <a href="workoutSession.php"><button>learn more</button></a>
  </div>
</div>

<div class="card">
  <img src="p2.jpg" alt="">
  <div class="content">
    <h1>expert trainers</h1>
    <p>Our well-trained fitness trainers will provide you with advice on the type of exercises and the selection of equipment to suit your need and health.</p>
    <a href="Trainers.html"><button>learn more</button></a>
  </div>
</div>

<div class="card">
  <img src="p3.jpeg" alt="">
  <div class="content">
    <h1>personal training</h1>
    <p>Everyone has a different fitness goal. Our trainers are here to help you meet and break them. But it’s not just about getting you fit. Our trainers will help you unlock your full fitness potential.</p>
    <a href="PersonalTraining.php"><button>learn more</button></a>
  </div>
</div>

</div>

</section>



<section id="about">

<div class="image">
  <img src="pic.png" alt="">
</div>

<div class="content">
  <h1>why you should choose us?</h1>
  <p>
    If you&#39;re looking to join a supportive, welcoming gym community, with people of all fitness levels who wants to see you succeed, you&#39;ve come to the right place.
    <br><br>
    Fitness isn’t just about the goal - it’s a journey. So we’ve created a space for you to become the star you really are. With tons of fresh classes, A+ equipment and amazing trainers to cheer you on, we’ll get you looking - and feeling - sensational!
  </p>

  <h1>
    our gym includes
  </h1>

  <div class="buttons">
    <a href="https://youtu.be/fvFQU6NvJo8 "target="_blank"><button>training</button></a>
    <a href="https://youtu.be/geCFEzm2IHE"target="_blank"><button>barbell</button></a>
    <a href="https://youtu.be/d8QqXLV3tWM"target="_blank"><button>yoga</button></a>
    <a href="https://youtu.be/G40K6Dogr8M"target="_blank"><button>treadmill</button></a>
    <a href="https://youtu.be/rIwUOwYDSWI"target="_blank"><button>dumbbell</button></a>
    <a href="https://youtu.be/cQnkHbuf3Pc"target="_blank"><button>battle ropes</button></a>
  </div>
</div>

</section>




<section id="gallery">

  <h1>gallery</h1>

<div class="image-container">

  <div class="image">
    <img src="img1.jpg" alt="">
    <div class="info">
      <a href="gallery.html"><button>view more!</button></a>
    </div>
  </div>

  <div class="image">
    <img src="img2.jpg" alt="">
    <div class="info">
      <a href="gallery.html"><button>view more!</button></a>
    </div>
  </div>

  <div class="image">
    <img src="img3.jpg" alt="">
    <div class="info">
      <a href="gallery.html"><button>view more!</button></a>
    </div>
  </div>

  <div class="image">
    <img src="img4.jpg" alt="">
    <div class="info">
      <a href="gallery.html"><button>view more!</button></a>
    </div>
  </div>

  <div class="image">
    <img src="img5.jpg" alt="">
    <div class="info">
      <a href="gallery.html"><button>view more!</button></a>
    </div>
  </div>

  <div class="image">
    <img src="img6.jpg" alt="">
    <div class="info">
      <a href="gallery.html"><button>view more!</button></a>
    </div>
  </div>

</div>

</section>

<section id="contact">

<form action="server.php" name="Contact" method="POST">
    <h1>get in touch</h1>
    <input type="text" placeholder="full name" name="FullName">
    <input style="text-transform: none"type="email" placeholder="e-mail" name="Email">
    <input type="number" placeholder="phone" name="Phone"> 
    <textarea placeholder="message" cols="30" rows="10" name="Message"></textarea>
    <input type="submit" value="send" name="contact">
  </form>

  <div class="image">
    <img src="man.png" alt="">
  </div>

</section>

<section id="footer">

  <div class="footer-container">

    <div class="brand">
      <div class="logo">
        <a href="#"><img src="logo.jpg"></a>
      </div>
    </div>

    <div class="contact-info">
      <div class="info">
        <a href="#" class="fas fa-map-marker-alt" data-text="kuala lumpur, malaysia"></a>
        <a href="#" class="fas fa-envelope" data-text="fitnessuniverse@gmail.com"></a>
        <a href="#" class="fas fa-phone" data-text="+(603) 8027 2277"></a>
      </div>
    </div>

    <div class="letter">
      <h1>newsletter</h1>
      <p>submit your e-mail for latest updates</p>
      <input type="email" placeholder="e-mail">
      <input type="submit" placeholder="subscribe">
    </div>

  </div>


  <h1 class="msg">copyright &copy; 2021 <span>fitness universe</span> | all rights reserved.</h1>

</section>


<script>
  $(document).ready(function(){

    $('.fa-bars').click(function(){
      $(this).toggleClass('fa-times');
      $('nav').toggleClass('nav-toggle');
    });

    $('nav ul li a').click(function(){
      $('.fa-bars').removeClass('fa-times');
      $('nav').removeClass('nav-toggle');
    });


    $(window).scroll(function(){
      if($(window).scrollTop() >= 20){
        $('header').addClass('active');
      }else{
        $('header').removeClass('active');
      }
    });

  });
</script>

</body>


</body>
<script>
  $(document).ready(function() {
      function disableBack() { window.history.forward() }

      window.onload = disableBack();
      window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
  });
</script>
</html>