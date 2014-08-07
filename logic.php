<?php
$_Num_words_in_dict = 58110;
if(isset($_GET['num_words']) and ! isset($_GET['agreed'])){
	$message = '<p>Please consider whether you are prepared to know the future, then check the box above.</p>';
}
elseif(isset($_GET['num_words'])){
	$num_words = $_GET['num_words'];
	for($i=0; $i<$num_words; $i++){
		$word_indices[$i]=rand(0,$_Num_words_in_dict-1);
	}
	sort($word_indices);
	$dict=fopen('dict.txt', 'r'); //read only
	$position_in_dict=0;
	$next_array_index=0;
	while($next_array_index<$num_words){
		$word=substr(fgets($dict), 0, -1);
		if($word_indices[$next_array_index]==$position_in_dict){
			$future_words[$next_array_index]=$word;
			$next_array_index++;
		}
		$position_in_dict++;
	}
	shuffle($future_words);
	$future = $future_words[0];
	for($i=1; $i<$num_words; $i++){
		$future.=' '.$future_words[$i]; //equivalent of future=future.[...]
		
	$message = '<br><h2>Behold your future:</h2> <h3>'.$future.'<h3>';
		
	}
}