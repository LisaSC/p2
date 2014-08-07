<!DOCTYPE html>
<html>
<head>
	<title>Silicon Ball</title>
	<meta charset='utf-8'>
	<?php require 'logic.php'?>
</head>

<body>
	<h1>Silicon Ball</h1>
	<form action='index.php' method='get'>
		<input type='text' pattern=[1-9] name='num_words' size=1 value=<?php echo empty($_GET) ? 3 : $_GET['num_words']?>>
		(1-9)<br>
		<input type='checkbox' name='agreed'>
		I am prepared to view the future and understand any and all associated risks.<br>
		<input type='submit' value='View future!'>
	</form>
	
	<?php if(isset($message))echo $message ?>
	
</body>
</html>