<?php

	require_once("sistem.php");
	
	$sistem = new insan();
	$sistem->ekle("Murat",180,60);
	echo $sistem->bilgiler();

?>
