<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team New York</title>

    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="css/animate.min.css">

  </head>
  <body>

    <!-- HEADER -->

    <div id="header" class="header">

      <div class="navbar">

        <?php $current = 'home'; include("includes/menu.php"); ?>

      </div>

        <h1>We are <span class="typed"></span></h1>

        <div class="contact-btn">
          <a href="patrice.php">
            <button type="button">About us</button>
          </a>
        </div>

      </div>

    <div class="team">

    </div>


    <div id="team" class="team">
      <div class="container">
        <h2>Meet the team!</h2>
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <h4>Patrice Douge</h4>
            <p>Coder for Team New York. Has experience building front and back-end websites, specifically working as a web developer for Amexsa Corp.</p>
            <img src="images/patricePic.png" alt="Patrice">
          </div>
          <div class="col-lg-4 col-md-4">
            <h4>Sarah Ogunji</h4>
            <p>Information Architect for Team New York. She has experience has a digital studies major and intern for New Visons.</p>
            <img src="images/sarahPic.jpg" alt="Sarah">
          </div>
          <div class="col-lg-4 col-md-4">
            <h4>Andrew Regelski</h4>
            <p>Designer for Team New York. He has a lot of experience building and mainting websites, specifically for a networking event.</p>
            <img src="images/andrewPic.png" alt="Andrew">
          </div>
        </div>
      </div>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/wow.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/typed.min.js"></script>
    <script type="text/javascript">
      var typed = new Typed('.typed', {
      strings: ["Coders","Designers","Information Architects","Team New York"],
      typeSpeed: 100,
      backSpeed: 70,
  		showCursor: true,
      });
    </script>

  </body>
</html>
