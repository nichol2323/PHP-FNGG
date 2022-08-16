<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>FNGG</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--  -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--  -->
</head>
<style>
    body, html {
  height: 100%;
}

.bg {
  
  background-image: url("images/asset/bg1.jpg");
  height: 100%;
  
  background-repeat: no-repeat;
  background-size: cover;
  /* opacity: 0.9; */
}

.main-header{
  color: white;
  text-align: center;
  
 
  
}
  </style>
<body>
    <!-- nav -->
    <?php include_once('user-header.php'); ?>
    <!-- END nav -->

    <div class="bg">
      <div class="container-fluid">
        <br><br>
        <div class="row">
          <div class="col-md-4">
          <div class="col-md-12" style="background: rgba(0, 0, 0, 0.5);">
        <div class="main-header">
          <h3 style="color: white;">WELCOME TO</h3>
          <h1 style="color: white; font-weight: 900;margin-top: -20px;">FNGG ENGINEERING CONSULTANCY SERVICES<br>COMPANY</h1>
          <p>Enhanced Daily Time Record and Payroll System is a web-based company management system using QR Code. The Enhanced Daily Time Record Time Record and Payroll System are intended for both admins and employees of FNGG Engineering</p>
        </div>
      </div>
          </div>
          <div class="col-md-4" style="color: white;">
            <div style="background: rgba(0, 0, 0, 0.5); border-radius: 15px;"><center><br>
              <h3 class="card-title" style="color: white;">Employee Data</h3>
              <h5 class="card-title" style="color: white;">Name: <?php echo $_SESSION['name']; ?></h5>
              <h5 class="card-title" style="color: white;">Project: <?php $emp = $_SESSION['user_name'];$servername = "localhost";$username = "root";$password = "";$dbname = "fngg";$conn = new mysqli($servername, $username, $password, $dbname);if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}$sql = "SELECT * FROM employee WHERE qr_text = '$emp' ";$result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {echo $row["project_name"];}} else {echo '<u>'.'none'.'</u>';}$conn->close();?></h5>
              <h5 class="card-title" style="color: white;"><?php $emp = $_SESSION['user_name'];$servername = "localhost";$username = "root";$password = "";$dbname = "fngg";$conn = new mysqli($servername, $username, $password, $dbname);if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}$sql = "SELECT sum(total_min)/60 as worktime, sum(o_total_min)/60 as overtime, sum(total_min+o_total_min)/60 as total FROM attendance WHERE payroll_status = '' AND emp_name = '$emp'; ";$result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {echo 'Regular: '.$row["worktime"].' Hour(s)<br>';echo 'Overtime: '.$row["overtime"].' Hour(s)<br>';echo 'Total: '.$row["total"].' Hour(s)<br>';}} else {echo '<u>'."None".'</u>';}$conn->close();?></h5>
              <br>QR Code:<br><a href="img/<?php echo $_SESSION['user_name']; ?>.png" target="_blank"><img style="width: 100px; height: 100px;" src="img/<?php echo $_SESSION['user_name']; ?>.png"></a>
              </center><br><br></div>
          </div>
          <div class="col-md-4">
          <div class="main-header" style="background: rgba(0, 0, 0, 0.5);">
          <center><h3 style="color: white;font-weight:800;">PROJECTS</h3></center>
              <table style="margin: 10px 40px;">
                <tr>
                  <td><img style="vertical-align:middle" src="images/asset/resid.png" alt="" width="80" height="70"></td>
                  <td style="text-align: left;"><a href="#">Residential</a><br>Resize your dreams house with remodelling or new construction.</td>
                </tr>
             
                <tr>
                  <td><img style="vertical-align:middle" src="images/asset/com.jpg" alt="" width="80" height="70"></td>
                  <td style="text-align: left;"><a href="#">Commercial</a><br>Turn-key build-out renovation of your office, warehouse, or retail store.</td>
                </tr>
             
                <tr>
                  <td><img style="vertical-align:middle" src="images/asset/steel.jpg" alt="" width="80" height="70"></td>
                  <td style="text-align: left;"><a href="#">Steel Buildings</a><br>Manufactured by FNGG Engineering Consultancy Services Company.</td>
                </tr>
                <tr>
                  <td></td>
                  <td align="right"><a href="#" style="color: white;text-decoration:underline;margin-right:0px;">more</a></td>
                </tr>
              </table><br><br>
              
            </div>
          </div>
        </div>
      </div>
      </div>
     
    </div>

  

    <!--  -->


</body> <!-- Footer -->
<footer class="page-footer font-small blue">

<!-- Copyright -->
<div style="background-color:black;color:white;" class="footer-copyright text-center py-3">©
  <a href="" style="color: white;"> FNGG Engineering Consultancy Services Company</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

</html>
<?php
} else {
  header("Location: index.php");
  exit();
}
?>
