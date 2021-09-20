<?php
	$yourName = "Brian";
	$assignmentName = "PHP Basics";
	$number1 = 15;
	$number2 = 7;
	$total = $number1 + $number2;


	$phpArray = array('PHP', 'JavaScript', 'HTML');

	$jsLanguages = "";

	foreach($phpArray as $value){
		
		$jsLanguages .= "'" . $value . "', ";
	}

?>

<script>
	
	<?php
	echo "let languages = [$jsLanguages]";
	?>
	
	let languages1 = [<?php echo $jsLanguages ?>];
	

</script>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<h1>WDV341 Intro PHP</h1>
	<?php echo "<h1>" . $assignmentName . "</h1>"; ?>
	
	<h2><?php echo $yourName; ?></h2>
	
	<p><?php echo "Number 1 = " . $number1 . "."; ?></p>

	<p><?php echo "Number 2 = " . $number2 . "."; ?></p>

	<p><?php echo "Total of Number 1 + Number 2 = " . $total . "."; ?></p>
	
	
	<p><?php echo $jsLanguages?></p>
	


</body>
</html>