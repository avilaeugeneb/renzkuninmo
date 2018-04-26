<?php 
require_once 'heading.php';
?>


<div id="getinput">
	<?php 
		if(isset($_POST['input1'])){
			echo "Input:". htmlspecialchars($_POST['input1']) ."<br>";
		}
	?>

	<?php 
		if(isset($_POST['input1'])){
			echo "Name:". htmlspecialchars($_POST['name']) ."<br>";
		}
	?>
</div>


<?php 
require_once 'footer.php';
?>
