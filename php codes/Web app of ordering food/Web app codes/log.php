<?php
    $file="data/log.txt";
	header('Content-type: text/plain');
	header('Content-Disposition: attachment; filename="recordlog.txt"');
	readfile('recordlog.txt');
?>