<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>FNGG</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <?php include_once('header.php'); ?>
    <!-- END nav -->
    
  <div class="bg">
  <div class="container-fluid">
    <br>
    <div class="row">
      <div class="col-md-12" style="background: rgba(0, 0, 0, 0.5);">
        <div class="main-header" >
          <h3 style="color: white;">WELCOME TO</h3>
          <h1 style="color: white; font-weight: 900;margin-top: -20px;">FNGG ENGINEERING CONSULTANCY SERVICES<br>COMPANY</h1>
          <p>Enhanced Daily Time Record and Payroll System is a web-based company management system using QR Code. The Enhanced Daily Time Record Time Record and Payroll System are intended for both admins and employees of FNGG Engineering</p>
        </div>
      </div>
    </div>
<br>
    <div class="row">
      <div class="col-md-4">
      <center>
        <div style="color: white; font-weight: 800;background: rgba(0, 0, 0, 0.5);">
          <p><img src="images/asset/get.png" alt="" width="35px" height="40px"> GET DIRECTIONS</p>
          <p style="margin-top: -20px;"><img src="images/asset/gmap.png" alt="" width="350px" height="250px"></p>
        </div>
        </center>
      </div>
      <div class="col-md-4">
      <div style="color: white;background: rgba(0, 0, 0, 0.5);">
      <p style="text-align: center; font-weight: 800;"><img src="images/asset/address.png" alt="" width="35px" height="40px"> ADDRESS</p>
      <p style="text-align: left;margin-left: 100px;">Unit 604 - B Jovan <br>
      Condominium, Shaw Blvd, <br>
      Mandaluyong City,<br>
      Philippines 1552<br><br><br><br><br>
      </p>
      </div>
      </div>
      <div class="col-md-4">
      <div style="color: white;background: rgba(0, 0, 0, 0.5);">
      <p style="text-align: center; font-weight: 800;"><img src="images/asset/contacts.png" alt="" width="35px" height="40px"> CONTACTS</p>
      <p style="text-align: left;margin-left: 100px;margin-top: -20px;">Contact No.: (02) 584 - 5374,<br>
      &nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;(02) 633- 9220<br><br>
      TeleFax No.: (02) 584 - 5731<br><br>
      Mobile(smart): 09216206974 <br>
      Mobile(globe): 09062055771 <br><br>
      Email: fnggengineering@yahoo.com
      </p>
      </div>
      </div>
    </div>
  </div>
  </div>

    <!--  -->


  </body>
 <!-- Footer -->
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