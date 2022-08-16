<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["submit"])) {

      $fname = $_POST["fname"];
      $mname = $_POST["mname"];
      $lname = $_POST["lname"];
      $dob = $_POST["dob"];
      $pob = $_POST["pob"];
      $sex = $_POST["sex"];
      $cstatus = $_POST["cstatus"];
      $nationality = $_POST["nationality"];
      $phoneno = $_POST["phoneno"];
      $address = $_POST["address"];
      $sss = $_POST["sss"];
      $tin = $_POST["tin"];
      $nbi = $_POST["nbi"];
      $qrtext = "$fname$mname$lname";
      $fullname = $fname. " ". $mname . " " . $lname;


      $pass = md5($qrtext);
      // database connection
      include 'employee-connn.php';
      $connn = OpenCon();
      // save employee record to database
      $sql = "INSERT INTO employee (fname, mname, lname, date_of_birth, place_of_birth, sex, civil_status, nationality, phone, address, sss_id, tin_id, nbi_id, qr_text) VALUES ('$fname', '$mname', '$lname', '$dob', '$pob', '$sex', '$cstatus', '$nationality', '$phoneno', '$address', $sss, $tin, $nbi, '$qrtext')";

      $sql1 = "INSERT INTO admin (name, user_name, password, type) VALUES ('$fullname', '$qrtext', '$pass', 'employee')";

      if ($connn->query($sql) == TRUE) {
        if ($connn->query($sql1) == TRUE) {

            include("phpqrcode/qrlib.php");
            $path = 'img/';
            $file = $path . $qrtext . '.png';
            $text = $qrtext;
            QRcode::png($text, $file);

            echo '<script>alert("Successfully add employee");</script>';
            $url = "file:///C:/xampp/htdocs/fngg/img/".$text.".png";
            
            
            

        } else {
            echo "Error: " . $sql1 . "<br>" . $connn->error;
        }
      } else {
        echo "Error: " . $sql . "<br>" . $connn->error;
      }

      

      // close database connection
      $connn->close();
    }
  }

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>FNGG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
</head>

<body>
    <!-- nav -->
    <?php include_once('header.php'); ?>
    <!-- END nav -->

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 py-5">
                <h3>Add Employee</h3>
                <hr style="border: 1px solid gray;">
                <p class="mb-4">
                <form action="employee-add.php" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">First Name</h5>
                                </label>
                                <input type="text" name="fname" class="form-control" placeholder=""
                                    onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                    required />

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">Middle Name</h5>
                                </label>
                                <input type="text" name="mname" class="form-control" placeholder=""
                                    onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                    />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">Last Name</h5>
                                </label>
                                <input type="text" name="lname" class="form-control" placeholder=""
                                    onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                    required />

                            </div>
                        </div>
                    </div>
                    <!--  -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">Date of Birth</h5>
                                </label>
                                <script>
                                $(function() {
                                    var dtToday = new Date();

                                    var month = dtToday.getMonth() + 1;
                                    var day = dtToday.getDate();
                                    var year = dtToday.getFullYear();
                                    year = year - 18;
                                    if (month < 10)
                                        month = '0' + month.toString();
                                    if (day < 10)
                                        day = '0' + day.toString();

                                    var maxDate = year + '-' + month + '-' + day;

                                    $('#txtDate').attr('max', maxDate);
                                });
                                </script>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                <input type="date" id="txtDate" name="dob" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">Place of Birth</h5>
                                </label>
                                <input type="text" name="pob" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <!--  -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">Sex</h5>
                                </label>
                                <select class="form-control" name="sex" id="" required>
                                    <option value=""></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">Civil Status</h5>
                                </label>
                                <select class="form-control" name="cstatus" id="" required>
                                    <option value=""></option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Divorced">Divorced</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">Nationality</h5>
                                </label>
                                <select class="form-control" name="nationality" id="" required>
                                    <option value=""></option>
                                    <option value="Filipino">Filipino</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <!--  -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">Phone No.</h5>
                                </label>
                                <input type="number" placeholder="" onKeyPress="if(this.value.length==10) return false;"
                                    name="phoneno" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">Address</h5>
                                </label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">SSS ID</h5>
                                </label>
                                <input class="form-control" type="number" name="sss" maxlength="12"
                                    placeholder="12 Digits Only" onKeyPress="if(this.value.length==12) return false;"
                                    required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">TIN ID</h5>
                                </label>
                                <input class="form-control" type="number" name="tin" placeholder="12 Digits Only"
                                    onKeyPress="if(this.value.length==12) return false;" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">NBI No.</h5>
                                </label>
                                <input class="form-control" type="number" name="nbi" placeholder="12 Digits Only"
                                    onKeyPress="if(this.value.length==12) return false;" required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input class="btn btn-primary" type="submit" name="submit"
                                value="Confirm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--  -->


</body>

</html>
<?php
} else {
  header("Location: index.php");
  exit();
}
?>