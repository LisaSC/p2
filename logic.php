<?php
$_Num_words_in_dict = 58110;
if(isset($_GET['num_words']) and ! isset($_GET['agreed'])){ //isset($_GET['num_words']) checks whether form has been submitted
	$message = '<p>Please consider whether you are prepared to know the future, then check the box above.</p>';
}
elseif(isset($_GET['num_words'])){
	$num_words = $_GET['num_words'];
	for($i=0; $i<$num_words; $i++){ //loop to generate array of random indices into wordlist
		$word_indices[$i]=rand(0,$_Num_words_in_dict-1);
	}
	sort($word_indices);//sorts indices to allow more efficient search through dict
	$dict=fopen('dict.txt', 'r'); //read only
	$position_in_dict=0; //how many words have been read
	$next_array_index=0; //how many words have been found
	while($next_array_index<$num_words){ //search through dict until all words have been found
		$word=substr(fgets($dict), 0, -1); //reads next line from dict and cuts off newline character
		if($word_indices[$next_array_index]==$position_in_dict){ //checks if the next words corresponds to one of the desired indices
			$future_words[$next_array_index]=$word; //generates an array of found words
			$next_array_index++;
		}
		$position_in_dict++;
	}
	shuffle($future_words);
	$future = $future_words[0]; //these three lines concatenate the array of desired words
	for($i=1; $i<$num_words; $i++){
		$future.=' '.$future_words[$i]; //equivalent of future=future.[...]
		
	$message = '<br><h2>Behold your future:</h2> <h3>'.$future.'<h3>'; //html code for index.php
		
	}
}