<?php  
	require_once "includes/header.php";
?>
	<div class="form-wrap">
		<div class="register">
			<form action="" method="post">
				<h1>Login</h1>
				<input type="text" name="username" placeholder="Username/Email" autocomplete="off">
				<input type="password" name="password" placeholder="Password" autocomplete="off">
				<input type="submit" name="submit" value="Login">
				<p>Not Registered Yet? <a href="#">Register Now!</a></p>
			</form>
		</div>
	</div>
<?php  
	require_once "includes/footer.php";
?>