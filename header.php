<!--  -->
<link rel="stylesheet" href="css/nav.css" />
<section style="background-color: #191a19; color: white;">
  <nav class="navbar navbar-expand-lg ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a href="home.php"><img src="images/favicon.png" alt="icon" class="" width="50px" height="50px"></a>
      <!-- <a class="navbar-brand" href="home.php" style="font-size: 20px; color:white;">FNGG</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav m-auto">
          <!--  -->
          <li class="nav-item">
            <a href="home.php" class="nav-link" style="color: white;">Home</a>
          </li>
          <!--  -->
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">Project</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="project-projectadd.php">Add Project</a>
              <a class="dropdown-item" href="project.php">Manage Project</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">Regular Time In</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="attendance-timein.php">Timein</a>
              <a class="dropdown-item" href="attendance-timeout.php">Timeout</a>
              <a class="dropdown-item" href="list.php">Attendance Report</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">Overtime</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="attendance-overtime.php">Timein</a>
              <a class="dropdown-item" href="attendance-overtime-timeout.php">Timeout</a>
              <a class="dropdown-item" href="overtime-list.php">Overtime Report</a>
              
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">Manage Employee</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="employee-add.php">Add Employee</a>
              <a class="dropdown-item" href="employee.php">Manage Employee</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">Payroll</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="payroll-create.php">Compute Payroll</a>
              <a class="dropdown-item" href="payroll-manage.php">Payroll List</a>
              <a class="dropdown-item" href="payroll-report.php">Payroll Report</a>
            </div>
          </li>
          <!--  -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">Manage Account</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="signup.php">Add New Admin</a>
              <a class="dropdown-item" href="change-password.php">Change Password</a>
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