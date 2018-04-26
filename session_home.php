<?php 
require_once 'heading.php';
?>


<div id="getinput">
	<?php
		$username = htmlspecialchars($_POST['username']);
		$password = htmlspecialchars($_POST['password']);

		if(authenticate($username,$password)){
			echo 'User is valid';
			$_SESSION['user'] = $username;
			header('Location: session_page1.php');
		}
		else{
			$_SESSION['message'] = 'Please enter valid user/password';
			header('Location: login.php');
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
