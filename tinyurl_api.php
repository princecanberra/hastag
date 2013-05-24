<?php  

  $url ='http://stackoverflow.com/questions/1340001/deny-direct-access-to-all-php-files-except-index-php';
  	$rul= file_get_contents('http://tinyurl.com/api-create.php?url='.$url);
		
		echo "<a href='$rul'>$rul</a>";




?>
