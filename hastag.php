<?php

  	
		$str = '#abc';
		
		$str = preg_replace('/\#([a-z0-9]+)/i', '<a href="search.php?q=$1">#$1</a>', $str);


		echo "$str";
?>
