<!DOCTYPE html>
<html>
<head>
	<title>Silicon Ball</title>
	<meta charset='utf-8'>
	<?php require 'logic.php'?>
</head>

<body>
	<h1>Silicon Ball</h1>
	<p>
	You may have heard that a crystal ball has the power to show the future. Like <br>
	many westerners, you may find such traditional forecasting outdated. This tool <br>
	aims to remedy the situation by incorporating recent technological advancements <br>
	such as uncapitalized and unpunctuated sentences into the traditional practice. <br>
	Please select your preferred sentence length. Beginners may wish to select a <br>
	shorter	length to start, while advanced students will relish the cryptic form<br>
	of longer sentences.
	</p>
	<form action='index.php' method='get'>
		<input type='text' pattern=[1-9] name='num_words' size=1 value=<?php echo empty($_GET) ? 3 : $_GET['num_words']?>> <!-- value uses ternery operator-->
		(1-9)<br>
		<input type='checkbox' name='agreed'>
		I am prepared to view the future and understand any and all associated risks.<br>
		<input type='submit' value='View future!'>
	</form>
	
	<?php if(isset($message))echo $message ?> <!-- message is output to be displayed -->
	
</body>
</html>