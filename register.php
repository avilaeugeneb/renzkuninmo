<?php 
require_once 'heading.php';
?>

<div class="loginform">
	<div class="container" id="logincontainer"> 
		<!-- Material form register -->
		<form action="" method="POST">
			<p class="h4 text-center mb-4">Register</p>

			<!-- Material input text -->
			<div class="md-form">
				<i class="fa fa-user prefix teal-text"></i>
				<input type="text" id="username" class="form-control" name="registername">
				<label for="username">Username</label>
			</div>

			<!-- Material input email -->
			<div class="md-form">
				<i class="fa fa-envelope prefix teal-text"></i>
				<input type="email" id="email" class="form-control" name="registeremail">
				<label for="email">Your email</label>
			</div>

			<!-- Material input email -->
			<div class="md-form">
				<i class="fa fa-exclamation-triangle prefix teal-text"></i>
				<input type="email" id="confirmemail" class="form-control" name="registerconfirmemail">
				<label for="confirmemail">Confirm your email</label>
			</div>

			<!-- Material input password -->
			<div class="md-form">
				<i class="fa fa-lock prefix teal-text"></i>
				<input type="password" id="password" class="form-control" name="registerpassword">
				<label for="password">Your password</label>
			</div>

			<div class="text-center mt-4">
				<button class="btn btn-teal" type="submit">Register</button>
			</div>
		</form>
		<!-- Material form register -->
	</div>
</div>

<?php 
require_once 'footer.php';
?>
