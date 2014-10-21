<?php
	$volume=$_GET['vol'];
	$setVol = "amixer sset Master ".$volume."%";
	if(is_numeric($volume)) {
		exec($setVol);
	}
?>
