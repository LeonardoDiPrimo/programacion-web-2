<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/admin/assets/css/my-login.css">
</head>

<?php
$array_users = json_decode(file_get_contents("../data/user.json"), true);
?>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="/admin/assets/img/logo.jpg" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" class="my-login-validation"> <!-- novalidate="" --> 
								<div class="form-group">
									<label for="email">Email </label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										El Email es invalido
									</div>
								</div>

								<div class="form-group">
									<label for="password">Contraseña
										<a href="seccion/forgot.php" class="float-right">
											¿Olvidó su contraseña?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	La contraseña es requerida
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Recordarme</label>
									</div>
								</div>

								<div class="form-group m-0">
									<input type="submit" name="loginButton" id="loginButton" value="Ingresar" class="btn btn-primary btn-block"></input>
								</div>
								<div class="mt-4 text-center">
									¿No tenes una cuenta? <a href="seccion/register.php">Crear cuenta</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 &mdash; PW2
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php

	if (array_key_exists('loginButton', $_POST)) {
		$user_filter = array_filter($array_users["users"], function ($user) {
			return ($user['email'] == $_POST["email"] && $user['password'] == $_POST["password"]);
		});
		if (!empty($user_filter)) { ?>
			<meta http-equiv="refresh" content="0;url=seccion/tables.php">
		<?php
		} else { ?> <script>
				alert('El usuario o contraseña es incorrecto');
			</script>
	<?php
		}
	}
	?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="/admin/assets/js/my-login.js"></script>
</body>

</html>