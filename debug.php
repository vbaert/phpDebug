<?php

function debug($var) {
	echo '<pre>';
	if(is_array($var) || is_object($var)) print_r($var);
	else var_dump($var);
	echo '</pre>';
}

?>