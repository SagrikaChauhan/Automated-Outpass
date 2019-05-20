<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Minimal - Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700|EB+Garamond" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Minimal
    Template URL: https://templatemag.com/minimal-bootstrap-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="0" data-target="#theMenu">

  <!-- Menu -->
  <nav class="menu" id="theMenu">
    <div class="menu-wrap">
      <h1 class="logo"><a href="muj.php">OMS</a></h1>
      <i class="fa fa-times-circle menu-close"></i>
      <a href="studentlogin.php">Student Login</a>
    <a href="studentsignup.php">Student Signup</a>
      <a href="warden.php" >Warden</a>
      <a href="HOD.php">HOD</a>
      <a href="about.html">About</a>
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-dribbble"></i></a>
      <a href="#"><i class="fa fa-envelope"></i></a>
    </div>

    <!-- Menu button -->
    <div id="menuToggle"><i class="fa fa-bars"></i></div>
  </nav>

  <!-- ========== HEADER SECTION ========== -->
<!--  <section id="home" name="home"></section>
  <div id="headerwrap">
    <div class="container">
      <br>
      <div class="row">
        <h1>MUJ OUTPASS MANAGEMENT SYSTEM</h1>
        <br>
        <h3>We are here to HELP YOU!</h3>
        <br>
        <br>
        <div class="col-lg-6 col-lg-offset-3">
        </div>
      </div>
    </div>

  </div>-->


  <!-- ========== ABOUT SECTION ========== -->
<!--
  <section id="about" name="about"></section>
  <div id="f">
    <div class="container">
      <div class="row">
        <h3>ABOUT</h3>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>

        
        <div class="col-lg-6 col-lg-offset-3">
          <p>We are a team from 3rd year here to help you with otpass management</p>
          
          <a href="studentlogin.php"<p><button type="button" class="btn btn-warning">GET STARTED</button></p></a>
        </div>
      </div>
    </div>
   
  </div>
-->
  


  <!-- ========== CAROUSEL SECTION ========== -->
  <!-- <section id="portfolio" name="portfolio"></section>
  <div id="f">
    <div class="container">
      <div class="row centered">
        <h3>SOME PROJECTS</h3>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>

        <div class="col-lg-6 col-lg-offset-3">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> -->
            <!-- Wrapper for slides -->
            <!-- <div class="carousel-inner">
              <div class="item active centered">
                <img class="img-responsive" src="img/c1.png" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="img/c2.png" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="img/c3.png" alt="">
              </div>
            </div>
            <br>
            <br>
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
          </div>
        </div> -->
        <!-- col-lg-8 -->
      <!-- </div>
      <!-- row -->
   <!--  </div> -->
    <!-- container -->
  <!-- </div>  -->
  <!-- f -->

  <!-- ========== CONTACT SECTION ========== -->
  <section id="contact" name="contact"></section>
  <div id="f">
    <div class="container">
      <div class="row">
        <h3>CONTACT ME</h3>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>

        <div class="col-lg-6 col-lg-offset-3">
          <p>Manipal University Jaipur<br/>Jaipur<br/>+91 9999999999</p>
          <p>iam@awesomemail.com</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <label for="contact-name">Your Name</label>
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-email">Your Email</label>
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-subject">Subject</label>
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <label for="contact-message">Your Message</label>
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"><img src="lib/php-mail-form/loading.gif"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Send Message</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Minimal</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/minimal-bootstrap-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Minimal template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>