<?php
	header('Content-Type: text/event-stream');
	header('Cache-Control: no-cache');
	$time = date('r');
	echo "data: A szerver ideje: {$time}\n\n";
	flush();
?>