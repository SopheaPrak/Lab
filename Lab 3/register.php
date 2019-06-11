<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Login Page</title>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/mdb.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container-fluid bg">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<form class="font-container-head" action="data.php" method="post">
						<h3>Register to start your section</h3>
						<div class="form-group">
							<input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
						</div>
						<div>
							<input type="radio" name="gender" value="male" checked> Male<br>
							<input type="radio" name="gender" value="female"> Female<br>
							<input type="radio" name="gender" value="other"> Other
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="inputComPassword" id="inputComPassword" placeholder="Comfirm password">
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> I accept the <a href="#">Terms of Use & Privacy Policy</a>
							</label>
						</div>
						<button type="sign up" class="btn btn-info">Sign up</button>
						<div>
							<p>Already have an account? <a href="index.php">Sign in</a></p>
						</div>
					</form>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
			</div>
		</div>
		
		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/mdb.min.js"></script>
	</body>
</html>