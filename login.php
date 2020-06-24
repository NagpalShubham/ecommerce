<?php
include("connection.php");
?>

<html>

<head>
  <!-- Meta tags -->
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- Bootstrap css -->

  <link rel="stylesheet" href="loginstyle.css">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.default.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body style="padding-top: 50px;" id="bg">
  <!-- Header -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">CHAMPARN ORGANIC</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="signup.html"><span class="glyphicon glyphicon-home"></span> home</a></li>
          <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> About</a></li>
          <li><a href="signup.html"><span class="glyphicon glyphicon-phone-alt"></span> contact us</a></li>
          <li><a href="signup.html"><span class="glyphicon glyphicon-globe"></span> News</a></li>
          <li><a href="signup.html"><span class="glyphicon glyphicon-shopping-cart"></span> Shop now</a></li>
          <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Login/Sign Up</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--Header end-->






  <div class="container" id="login">

    <div class="mt-5 p-3 text-center">
      <h2>Login</h2>
    </div>

    <form class=" form-area ">
      <div class="form-group">
        <label for="email-id">E-mail ID</label>
        <input type="email" class="form-control" placeholder="Enter your email address">
      </div>
      <div class="form-group">
        <label for="InputPassword">Password</label>
        <input type="password" class="form-control" id="InputPassword" placeholder="Enter your password">
      </div>

      <div class="form-group form-check">
        <a href="reset.html" style="color:white">Forgot password</a>
      </div>
      <div class="col text-center">
        <button type="submit" class=" customBtn  btn-lg" aria-pressed="true" style="color:black">Login</button>
        <button type="submit" class="customBtn  btn-lg" aria-pressed="true" style="color:black" onclick="op()">Sign Up</button>

      </div>


    </form>

  </div>



  <!--Footer-->
  <footer>
    <div class="footer">
      <center>
        <p>Copyright &copy; CHAMPARN ORGANIC. All Rights Reserved </p>
      </center>
    </div>
  </footer>
  <!--Footer end-->




  <!-- Bootstrap jquery and javasript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="login.js" charset="utf-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  </script>
  <?
    $query= "INSERT INTO register (First_name,Last_name,email,pass,repass,mob_number,location) VALUES ('shubham','nagpal','shubham@521','shubham1234','123456,' 456789','India')";
    mysqli_query($conn, $query);
    ?>
</body>

</html>
