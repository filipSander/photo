<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Photo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<?php 
		require "config/DBContext.php";
	 ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="/">
					<?php 

						if( isset($_POST['do_post']) ){
							$userExist = mysqli_query($connection, "Select * from `vhod` where `login` = '". mysqli_real_escape_string($connection, $_POST['username'])."'");
							if( mysqli_num_rows($userExist) > 0 ){
								$user = mysqli_fetch_assoc($userExist);
								if($user['password'] == $_POST['pass']){
									?>
										<script type="text/javascript">
											alert("Вы успешно вошли");
										</script>
										<style type="text/css">
											.limiter{
												opacity: 0!important;
											}
										</style>
									<?php
								}else{
									?>
										<script type="text/javascript">
											alert("Неверные данне");
										</script>
									<?php
								}
							}else{
									?>
										<script type="text/javascript">
											alert("Неверные данне");
										</script>
									<?php
								}
						}
					?>
					<span class="login100-form-title p-b-51">
						Авторизация
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Необходимо ввести логин">
						<input class="input100" type="text" name="username" placeholder="Логин">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Необходимо ввести пароль">
						<input class="input100" type="password" name="pass" placeholder="Пароль">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<input type="submit" name="do_post" class="login100-form-btn" value="Войти">

					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div>
							<a href="/registration.php" class="txt1">
								Регистрация
							</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>