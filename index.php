<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="dist/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter"> 	
		<div class="container-login100">
			<div class="wrap-login100 principal">
				<form class="login100-form" method="POST" action="php/validaLogin.php">
					<span class="login100-form-title">
						Login 
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="nName" placeholder="Nome de usuario">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input " data-validate="Type password">
						<input class="input100" type="password" name="nSenha" placeholder="Senha">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Entrar
						</button>
					</div>


				</form>

				<div class="login100-more" style="background-image: url('dist/images/login.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	


</body>
</html>