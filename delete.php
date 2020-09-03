<?php

	include_once('functions.php');		

	/*
		your code here
		get id from url
		check id
		call removeArticle
	*/
	$msg = '';
	$id = $_GET['id'];
	if($id){
		if(removeArticle($id)){
			$msg = 'Article successfully deleted!';
		} else {
			$msg = 'Error! Article not deleted!';
		}
	} else {
		$msg = 'Error! Article not found!';
	}
?>

<p><?=$msg?></p>
<hr>
<a href="index.php">Move to main page</a>