<?php 
require_once 'heading.php';
?>

<div id="getinput">
	<?php 
		if(isset($_GET['input1'])){
			echo "Input:". htmlspecialchars($_GET['input1']) ."<br>";
		}
	?>

	<?php 
		if(isset($_GET['input1'])){
			echo "Name:". htmlspecialchars($_GET['name']) ."<br>";
		}
	?>
</div>


<?php 
require_once 'footer.php';
?>
