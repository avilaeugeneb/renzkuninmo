<?php 
	require_once 'heading.php';
?>

<div id="getinput">
	<?php

		if(isset($_SESSION['user'])){
			echo "<h1>Hello ". $_SESSION['user'] ."</h1>";
		}
		else{
			$_SESSION['message'] = "Please log in first";
			header('Location: login.php');
		}

	?>
</div>

<?php 
	require_once 'footer.php';
?>
