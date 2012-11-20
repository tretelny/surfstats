   <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
   <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>

    <div class="container navbar-wrapper">

      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <img class="logo pull-left" style="padding: 2px 4px 2px 2px;" href="home.php" src="./img/logonav_small.png">
          <a class="brand" href="./home.php">surfscore</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li <?php if ($currentPage == 'home.php') {
                 echo 'class="active"'; } ?>><a href="home.php">home</a></li>
              <li <?php if ($currentPage == 'board.php') {
                 echo 'class="active"'; } ?>><a href="board.php">dashboard</a></li>
              <li <?php if ($currentPage == 'leaderboard.php') {
                 echo 'class="active"'; } ?>><a href="leaderboard.php">leaderboard</a></li>
              <li <?php if ($currentPage == 'registration.php') {
                echo 'class="active"'; } ?>><a href="registration.php">register</a></li>
              <li <?php if ($currentPage == 'team.php') {
                echo 'class="active"'; } ?>><a href="team.php">about</a></li>
              <li <?php if ($currentPage == 'dontbeakook.tumblr.com') {
                echo 'class="active"'; } ?>><a href="http://www.dontbeakook.tumblr.com">blog</a></li>
            </ul>
            <div class="nav pull-right"><a href="contact.php"><img border="0" href="./contact.php" src="./img/mail.png"></a></div>
            
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->

    </div><!-- /.container -->
            

