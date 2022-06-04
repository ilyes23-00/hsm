<?php
     require_once 'helpers/login.inc.php';

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,: initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>HSM</title>
</head>
<body>

    <!-- login form  -->
    <div class="container">
	<div class="screen">
		<div class="screen__content">

			<form action="index.php" class="login" method="POST">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="User name" name="username">
	
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password" name="password">

				</div>

                <div class="login__field">
					<i class="login__icon fas fa-user-lock"></i>
                    <select name="work" class="login__input" >
                        <option value="Choix">Choose Position...</option>
                        <option value="secretaire">secretaire</option>
                        <option value="paramedical">paramedical</option>
                        <option value="chef_service">chef_service</option>
                        <option value="resident">resident</option>
                        <option value="maitre_assistant">maitre_assistant</option>
                    </select>

				</div>

				<button type="submit" class="button login__submit" name="submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				 
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
    <!-- login form  -->
    



    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>