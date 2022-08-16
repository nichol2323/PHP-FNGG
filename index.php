<!DOCTYPE html>
<html lang="en" style="font-family:'Courier New', Courier, monospace;">

<head>
	<title>FNGG - ADMIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--  -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-02.jpg);">
					<span class="login100-form-title-1">
						FNGG
					</span>
				</div>
				<!-- form -->
				<form action="login.php" method="post" class="login100-form validate-form">
					<?php if (isset($_GET['error'])) { ?>
						<p class="form-control alert alert-danger" role="alert"><?php echo $_GET['error']; ?></p>
					<?php } ?>
					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="uname" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
					</div>
					<div class="container-login100-form-btn m-b-18">
						<button class="login100-form-btn" style="width: 100%; background-color: #5eb2b3 !important;">Login</button>
					</div>
				
				</form>
			</div>
		</div>
	</div>
</body>

</html>