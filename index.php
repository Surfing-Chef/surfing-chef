<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">

    <!-- IE Edge Meta Tag -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">


    <!-- Optional IE8 Support -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>Surfing Chef Bootstrap 1.0.0</title>
  </head>

  <body>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- branding -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsemenu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            Surfing-Chef
          </a>
        </div>

        <!-- menu -->
        <div class="collapse navbar-collapse" id="collapsemenu">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>

          <!-- search -->
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">go</button>
          </form>

        </div>


      </div>
    </nav>
    <!-- END NAVIGATION -->

    <!-- HEADER -->
    <div class="landing-header">
      <!-- Shoutout -->
      <div class="shoutout container">
        <div class="row">
          <section class="col-xs-6 col-xs-offset-3">
            <div class="panel panel-default">
              <div class="tagline panel-heading">
                <h1>Work. Play.<br>Sleep. Repeat.</h1>
              </div>
              <div class="quote panel-body">
                <blockquote cite="https://www.goodreads.com/author/quotes/1124.Anthony_Bourdain">
                  &ldquo;Vegetarians, and their Hezbollah-like splinter faction, the vegans ... are the enemy of everything good and decent in the human spirit.&rdquo;
                  <footer>Anthony Bourdain, Kitchen Confidential</footer>
                </blockquote>
              </div>
            </div>
          </section>
        </div>
      </div><!-- END Shoutout -->

      <!-- YouTube video -->
      <div class="landing-video embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/k9qWa0Yn6bo?autoplay=0&amp;rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div><!-- END YouTube video -->

    </div>
    <!-- END HEADER -->

    <!-- Front Page CONTENT -->
    <div class="main-content container">
      <div>
        <h1>Latest Blog</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab libero, cupiditate veniam officiis itaque in porro iure fugit iusto reprehenderit commodi earum cum blanditiis quos error similique quod, facere! Hic.</p>
      </div>
      <div>
        <h1>Latest Feeds</h1>
        <p>This Section should display feeds.php generated html.</p>
        <?php include("functions/feeds.php"); ?>
      </div>
      <div>
        <h1>Recent Blogs</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab libero, cupiditate veniam officiis itaque in porro iure fugit iusto reprehenderit commodi earum cum blanditiis quos error similique quod, facere! Hic.</p>
      </div>
    </div>
    <!-- END CONTENT -->

    <!-- FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-xs-8 col-xs-offset-2">
            <a href="#">surfing-chef.com</a>
            <p>A WordPress theme based on Bootstrap framework.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END FOOTER -->

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- Custom JavaScript -->
  <script src="js/script.js"></script>
  </body>
</html>
