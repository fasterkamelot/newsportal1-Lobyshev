<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/login.css">
	<title>Register User</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h3>Register</h3></div>
					<div class="panel-body">
						<form action="registerAnswer" class="form-horizontal" role="form" method="POST">
							<div class="form-group">
								<label for="name" class="col-md-4 control-label">Name</label>
								<div class="col-md-6">
									<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-md-4 control-label">Email</label>
								<div class="col-md-6">
									<input type="email" id="email" class="form-control" name="email" value="" required>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-md-4 control-label">Password</label>
								<div class="col-md-6">
									<input type="password" id="password" class="form-control" name="password" required>
								</div>
							</div>
							<div class="form-group">
								<label for="password-confirm" class="col-md-4 control-label">Confirm password</label>
								<div class="col-md-6">
									<input type="password" id="password-confirm" class="form-control" name="confirm" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary" name="save">Register</button>
								</div>
							</div>
							<p style="padding-top: 10px;"><a href="./">Web site</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>