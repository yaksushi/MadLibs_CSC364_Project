<!-- Include file for menu
Not used on index or registration page -->

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="home.php">Home</a>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="history.php">History</a></li>
      <li><a href="about.php">About</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Mad Libs <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="madlib_1.php">Walmart Difference</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="madlib_2.php">The Farmer</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="madlib_3.php">Light My Fire</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="madlib_4.php">Michael Bay</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="madlib_5.php">Ice Cube</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-right">
      <div class="form-group">
        <input placeholder="Welcome <?php echo $userRow['username']; ?>" class="form-control">
      </div>
      <a href="logout.php?logout" class="btn btn-primary">
        <span class="glyphicon glyphicon-log-out"></span> &nbsp; Sign Out
      </a>
    </form>
  </div>
  <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
