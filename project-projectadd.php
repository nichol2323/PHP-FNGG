<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["submit"])) {

      $pname = $_POST["pname"];
      $start_date = $_POST["start_date"];
      $end_date = $_POST["end_date"];

      // database connection
      include 'project-connn.php';
      $connn = OpenCon();
      // save employee record to database
      $sql = "INSERT INTO project (name, status, start_date, end_date) VALUES ('$pname', 'ACTIVE', '$start_date', '$end_date')";

      if ($connn->query($sql) == TRUE) {
       
        echo '<script>alert("Successfully add project");</script>';
       
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
                <h3>Add Project</h3>
                <hr style="border: 1px solid gray;">
                <p class="mb-4">
                <form action="project-projectadd.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">Project Name</h5>
                                </label>
                                <script>
                                    $(function()
                                    {
                                        $('#input1').on('keypress', function(e){
                                            if(e.which == 32){
                                                console.log('Space Detected');
                                                return false;
                                            }
                                        })
                                    })
                                </script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                <input type="text" name="pname"  id="input1" class="form-control" placeholder="" required />

                            </div>
                        </div>

                    </div>
                    <!--  -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">Start Date</h5>
                                </label>
                                <script>
                                $(function() {
                                    var dtToday = new Date();

                                    var month = dtToday.getMonth() + 1;
                                    var day = dtToday.getDate();
                                    var year = dtToday.getFullYear();
                                    if (month < 10)
                                        month = '0' + month.toString();
                                    if (day < 10)
                                        day = '0' + day.toString();

                                    var maxDate = year + '-' + month + '-' + day;
                                    $('#txtDate').attr('min', maxDate);
                                });
                                </script>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                <input class="form-control" type="date" id="txtDate"
                                    name="start_date" required/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">End Date</h5>
                                </label>
                                <script>
                                $(function() {
                                    var dtToday = new Date();

                                    var month = dtToday.getMonth() + 1;
                                    var day = dtToday.getDate();
                                    var year = dtToday.getFullYear();
                                    if (month < 10)
                                        month = '0' + month.toString();
                                    if (day < 10)
                                        day = '0' + day.toString();

                                    var maxDate = year + '-' + month + '-' + day;
                                    $('#txtDate1').attr('min', maxDate);
                                });
                                </script>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                <input class="form-control" type="date" id="txtDate1"
                                name="end_date" required/>
                            </div>
                        </div>
                    </div>
                    <!--  -->

                    <div class="row">
                        <div class="col-md-12">
                            <input class="btn btn-primary" type="submit" name="submit" value="Confirm">
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