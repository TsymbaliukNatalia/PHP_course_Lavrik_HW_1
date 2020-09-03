<?php

	include_once('functions.php');

	/*
		your code here
		check request method
		read POST-data
		validate data
		call addArticle
	*/
	$howForm = true;
	$msg = '';
	$title = '';
	$content = '';

	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$title = $_POST['title'];
		$content = $_POST['content'];
		if($title === ''){
			$msg = 'Fill in the title!';
		} elseif ($content === '') {
			$msg = 'Fill in the content!';
		} else {
			if(addArticle($title, $content)){
				$howForm = false;
				$msg = 'Article successfully added!';
			} else{
				$msg = 'Error! Article not added!';
			}
		}
	}

?>
<?if($howForm):?>
	<form action="add.php" method="post">
	<p>Title:</p>
	<p><input type="text" name="title" value="<?=$title?>"></p>
	<p>Content:</p>
	<p><textarea rows="10" cols="45" name="content">
	<?=$content?>
	</textarea></p>
	<p><input type="submit" value="Send"></p>
	</form>
<?endif;?>
 <p><?=$msg?></p>
<hr>
<a href="index.php">Move to main page</a>