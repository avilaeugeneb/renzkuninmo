<?php 
require_once 'heading.php';
?>


<div id="getinput">
	<?php 
		session_start();
		$username = htmlspecialchars($_POST['username']);
		$password = htmlspecialchars($_POST['password']);

		if(authenticate($username,$password)){
			echo 'User is valid';
			$_SESSION['user'] = $username;
		}
		else{
			echo 'Incorrect login details.';
		}

		function authenticate($username,$password){
			if($username=='admin' && $password == 'secret'){
				return true;
			}
			else{
				return false;
			}
		}
	?>
</div>


<?php 
require_once 'footer.php';
?>
