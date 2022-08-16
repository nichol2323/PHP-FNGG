<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
    <html>

    <head>
        <title>FNGG - Time In</title>
        <script type="text/javascript" src="js/adapter.min.js"></script>
        <script type="text/javascript" src="js/vue.min.js"></script>
        <script type="text/javascript" src="js/instascan.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <!-- nav -->
    <?php include_once('header.php'); ?>
    <!-- END nav -->

    <body>
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <video id="preview" width="100%"></video>
                </div>
                <div class="col-md-6">
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "fngg";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    if (isset($_POST['attendance_login'])) {

                        $employee = $_POST['text'];
                        $query = "SELECT * from employee WHERE qr_text ='$employee'";
                        $result = mysqli_query($conn, $query);
                        // check if the employee are registered
                        if (mysqli_num_rows($result) > 0) {
                            $employee = $_POST['text'];
                            $query = "select * from employee where qr_text = '$employee' and project_id != 0";
                            $result = mysqli_query($conn, $query);
                            // check if employee assigned in a project
                            if (mysqli_num_rows($result) > 0) {

                                $employee = $_POST['text'];
                                $date = new DateTime('now', new DateTimeZone('Asia/Manila'));
                                $datecheck1 = $date->format('d-m-Y 00:00:00');
                                $datecheck2 = $date->format('d-m-Y 24:00:00');

                                $query = "SELECT * from attendance WHERE emp_name='$employee' AND timeout BETWEEN '$datecheck1' AND '$datecheck2'";
                                $result = mysqli_query($conn, $query);
                                // check if employee present on regular time
                                if (mysqli_num_rows($result) > 0) {

                                    $employee = $_POST['text'];
                                    $date = new DateTime('now', new DateTimeZone('Asia/Manila'));
                                    $datecheck1 = $date->format('d-m-Y 00:00:00');
                                    $datecheck2 = $date->format('d-m-Y 24:00:00');

                                    $query = "SELECT * from attendance WHERE emp_name='$employee' AND o_timein BETWEEN '$datecheck1' AND '$datecheck2'";
                                    $result = mysqli_query($conn, $query);
                                    // check if employee already overtime
                                    if (mysqli_num_rows($result) > 0) {
                                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">' .
                                            '<center>This Employee Already Overtime today!</center>' . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                                    } else {
                                        $date = new DateTime('now', new DateTimeZone('Asia/Manila'));
                                        $standard_timein = $date->format('d-m-Y 16:00:00');
                                        $datenow = $date->format('d-m-Y H:i:s');
                                        $standard_timeout = $date->format('d-m-Y 20:00:00');
                                        // check if employee timein between 4pm-7pm
                                        if (($standard_timein <= $datenow) && ($datenow <= $standard_timeout)) {
                                            $employee = $_POST['text'];
                                            $date = new DateTime('now', new DateTimeZone('Asia/Manila'));
                                            $datenow = $date->format('d-m-Y H:i:s');

                                            $sql = "UPDATE attendance SET o_timein = '$datenow' WHERE o_timein = '' AND emp_name = '$employee'";
                                            $sql1 = "INSERT INTO attendance_login (emp_name, timein, description ) VALUES ('$employee', '$datenow', 'overtime')";

                                            if ($conn->query($sql1) === TRUE) {
                                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">' .
                                                    '<center>Timein Success!</center>' . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                                            } else {
                                                echo "Error: " . $sql . "<br>" . $conn->error;
                                            }

                                            if ($conn->query($sql) === TRUE) {
                                            } else {
                                                echo "Error: " . $sql . "<br>" . $conn->error;
                                            }
                                        } else {
                                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">' .
                                                '<center>Employee can only Overtime between 4PM - 7PM</center>' . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                                        }
                                    }
                                } else {
                                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">' .
                                        '<center>Employee can only overtime when they present on regular time!</center>' . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                                }
                            }
                            // employee not assign in any project
                            else {
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">' .
                                    '<center>Please assign the employee in a project first!</center>' . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            }
                        } else {
                            // employee are not registered
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">' .
                                '<center>Unknown Employee!</center>' . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
                    }

                    $conn->close();
                    ?>
                    <form action="" method="post">
                        <label style="font-weight: 600;">OVERTIME</label>
                        <input type="text" name="text" id="text" placeholder="" class="form-control" readonly><br>
                        <button type="submit" name="attendance_login" class="btn btn-warning">Over Time</button>
                        <button type="submit" name="" class="btn btn-secondary">Refresh</button>
                    </form>

                </div>
            </div>
        </div>

        <script>
            let scanner = new Instascan.Scanner({
                video: document.getElementById('preview')
            });
            Instascan.Camera.getCameras().then(function(cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                } else {
                    alert('No cameras found');
                }

            }).catch(function(e) {
                console.error(e);
            });

            scanner.addListener('scan', function(c) {
                document.getElementById('text').value = c;
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    </html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>