<?php 
require_once 'heading.php';
?>


<div class="loginform">
	<div class="container" id="logincontainer">

		<form action="session_home.php" method="POST">
			<h2 class="text-center">Log In</h2>

			<!-- Material input name -->
			<div class="md-form form-sm">
				<i class="fa fa-user prefix"></i>
				<input type="text" id="username" class="form-control form-control-sm" name="username">
				<label for="username">Username</label>
			</div>

			<!-- Material input subject -->
			<div class="md-form form-sm">
				<i class="fa fa-tag prefix"></i>
				<input type="password" id="password" class="form-control form-control-sm" name="password">
				<label for="password">Password</label>
			</div>

			<div class="text-center mt-4 mb-2">
				<button class="btn btn-teal" type="submit">Login
					<i class="fa fa-send ml-2"></i>
				</button>
			</div>
			<div class="text-center mt-4 mb-2" id="errormessage">
				<p>
					<?php 
					if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
						echo $_SESSION['message'];
						session_unset();
						session_destroy();
					}
					?>
				</p>
			</div>
		</form>
	</div>
</div>


<?php 
require_once 'footer.php';
?>
