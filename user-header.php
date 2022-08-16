<!--  -->
<link rel="stylesheet" href="css/nav.css" />
<section style="background-color: black; color: white;">
  <nav class="navbar navbar-expand-lg ftco-navbar-light" id="ftco-navbar">
    <div class="container">
    <a href="user-view.php"><img src="images/favicon.png" alt="icon" class="" width="50px" height="50px"></a>
      <!-- <a class="navbar-brand" href="user-view.php" style="font-size: 20px; color:white;">FNGG</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav m-auto">
          <!--  -->
          <li class="nav-item">
            <a href="user-view.php" class="nav-link" style="color: white;">Home</a>
          </li>
          <!--  -->
          <li class="nav-item">
            <a href="user-attendance.php" class="nav-link" style="color: white;">Attendance</a>
          </li>
          <li class="nav-item">
            <a href="user-overtime.php" class="nav-link" style="color: white;">Overtime</a>
          </li>
          <li class="nav-item">
            <a href="user-report.php" class="nav-link" style="color: white;">Payroll</a>
          </li>
      
          <!--  -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">Manage Account</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="user-changepassword.php">Change Password</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>