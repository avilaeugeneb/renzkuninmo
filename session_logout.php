<?php 
require_once 'heading.php';
?>

<div id="getinput">
<?php
	session_unset();
	session_destroy();
	header('Location: login.php');
?>

</div>


<?php 
require_once 'footer.php';
?>
