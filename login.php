<?php
session_start();
require 'database.php';

if (!empty($_POST['username']) && !empty($_POST['password'])) {
	$_nickname = $_POST['username'];
	$consulta_user = "SELECT id_usuario,correo,pasword FROM usuarios WHERE correo = '$_nickname'";
	$resultado_user = mysqli_query($cn, $consulta_user);
	$row_user = $resultado_user->fetch_object();
	if (mysqli_num_rows($resultado_user) > 0) {
		
		$_contrasena = $row_user->pasword;
		

		if (password_verify($_POST['password'], $_contrasena)) {
			
				$_SESSION["expire"] = time();
				$_SESSION['id_user'] = $row_user->id_usuario;
			
				header("Location: /prueba/home.php");
			
		} else {
			echo "<script>alert('CONTRASEÑA ERRONEA')</script>";
		}
	} else {
		echo "<script>alert('USUARIO NO REGISTRADO')</script>";
	}
}

if (!empty($_GET["mensaje_u"])) {
    echo "<script>alert('Datos guardados correctamente')</script>";

}



?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<title>Login</title>

	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />



	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />


	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

	<link rel="stylesheet" href="assets/css/chosen.css" />


	<link rel="stylesheet" href="assets/css/ace.min.css" />
	<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
	<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body class="navbar">

	<div class="row-fluid">
		<div class="span12">
			<div class="login-container">
				<div class="row-fluid">
					<div class="center">

					</div>
					<br>
					<br>
					<br>
					<br>
				</div>

				<div class="space-6"></div>

				<div class="row-fluid">
					<div class="position-relative">
						<div id="login-box" class="login-box visible widget-box no-border">
							<div class="widget-body">
								<div class="widget-main">
									<h4 class="header blue lighter bigger">
										<i class=" icon-edit red"></i>
										INGRESA CORREO Y CONTRASEÑA
									</h4>
									<?php if (!empty($message)) : ?>
										<p> <?= $message ?></p>
									<?php endif; ?>
									<div class="space-6"></div>

									<form action="login.php" method="POST">
										<fieldset>
											<label>
												<span class="block input-icon input-icon-right">
													<input name="username" id="username" type="text" class="span12" placeholder="Username" />
													<i class="icon-user"></i>
												</span>
											</label>

											<label>
												<span class="block input-icon input-icon-right">
													<input name="password" id="password" type="password" class="span12" placeholder="Password" />
													<i class="icon-lock"></i>
												</span>
											</label>
											<div class="space"></div>


											<input type="submit" value="Login" class="width-35 pull-right btn btn-small btn-primary">


								</div>

								<div class="space-4"></div>
								</fieldset>
								</form>



							</div>
							<!--/widget-main-->
						</div>
						<!--/widget-body-->
					</div>
					<!--/login-box-->
				</div>
				<!--/position-relative-->
			</div>
		</div>
	</div>
	<!--/.span-->
	</div>
	<!--/.row-fluid-->


	<!--basic scripts-->

	<!--[if !IE]>-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

	<!--[if !IE]>-->

	<script type="text/javascript">
		window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
	</script>

	<!--<![endif]-->

	<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

	<script type="text/javascript">
		if ("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
	</script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!--page specific plugin scripts-->

	<!--ace scripts-->

	<script src="assets/js/ace-elements.min.js"></script>
	<script src="assets/js/ace.min.js"></script>

</body>

</html>