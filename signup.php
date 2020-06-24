<?php
include("connection.php");
?>


<html>

<head>
  <!-- Meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
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

<body id="bg">
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

  <link rel="stylesheet" type="text/css" href="loginstyle.css">


  <div class="container" id="register">

    <form class="mx-auto p-3" action = login.php method = "POST">
      <div class="mt-5 p-3 text-center">
        <h2>Sign up with us👍</h2>
      </div>
      <div class="form-group">
        <label for="InputPassword">First Name</label>
        <input type="text" class="form-control" name = "First_name" id="InputPassword">
      </div>
      <div class="form-group">
        <label for="InputPassword">Last Name</label>
        <input type="text" class="form-control" name = "Last_name" id="InputPassword">
      </div>
      <div class="form-group">
        <label for="example-tel-input">E-Mail-ID</label>
        <input type="email" class="form-control" name = "email" id="example-tel-input">

      </div>
      <div class="form-group">
        <label for="InputPassword">Password</label>
        <input type="password" class="form-control" name = "password" id="InputPassword">
      </div>
      <div class="form-group">
        <label for="InputPassword">Confirm Password</label>
        <input type="password" class="form-control" name = "repassword" id="InputPassword">
      </div>
      <div class="form-group">
        <label for="example-tel-input">Mobile Number</label>
        <input type="code" class="form-control" name = mob_number id="example-tel-input">
      </div>
      <div class="form-group">
        <label for="example-tel-input">Location</label>
        <input type="textarea" class="form-control" name = "location" id="example-tel-input">
      </div>

      <div class="col text-center">
        <button type="submit" class="btn btn-outline-success btn-lg" aria-pressed="true" style="color:black">Register</button>

      </div>
      <div class="or-container">
        <div class="line-separator"></div>
        <div class="or-label">or</div>

      </div>
      <div class="row">
        <div class="col-lg-6 md-auto">
          <div>
            <center><a class=" customBtn btn btn-lg btn-google btn-block  btn-outline" style="background-color:white;margin-top: 100px;color:black;margin:auto; " href="#"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Google
                signup</a>
          </div>
        </div>
        <div class="col-lg-6 md-auto" style="margin:auto">
          <a class="btn btn-lg btn-social btn-facebook" style="margin-top: 10px;margin:auto;width:100%">
            <i class="fa fa-facebook fa-fw"></i> Sign in with Facebook</a></div>
      </div>
      <p class="text-inverse text-center">Already have an account? <a href="<?= base_url() ?>auth/login" data-abc="true">Login</a></p>
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


  <!-- Bootstrap jquery and javasript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

   <?php
    $First_name = $_POST['First_name'];
    $last_name = $_POST['Last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $mob_number = $_POST['mob_number'];
    $location = $_POST['location'];


    $query= "INSERT INTO register (First_name,Last_name,email,pass,repass,mob_number,location) VALUES ('$First_name','$last_name','$email','$password','$repassword',' $mob_number','$location')";
    mysqli_query($conn, $query);

   ?>


</body>

</html>
