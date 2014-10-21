<?php
	$type = $_GET['type'];
	$value = $_GET['value'];
	if(($value == 'on') || ($value == 'off')) {
		if(($type == 'screen') || ($type == 'lights') || ($type == 'front_lights') || ($type == 'back_lights') || ($type == 'proj') || ($type == 'movie') || ($type == 'all')) {
			exec('trailer '.$type.' --'.$value);
		}
	}
?>