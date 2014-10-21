<?php
	//make the connection with curl
	$cl = curl_init("http://ceiling.no-ip.org:8080");
	curl_setopt($cl,CURLOPT_CONNECTTIMEOUT,10);
	curl_setopt($cl,CURLOPT_HEADER,true);
	curl_setopt($cl,CURLOPT_NOBODY,true);
	curl_setopt($cl,CURLOPT_RETURNTRANSFER,true);
	
	//get response
	$response = curl_exec($cl);
	
	curl_close($cl);
	
	if (!$response)
		exec("export DISPLAY=:0.0; vlc -I http");
	else
		header('Location: http://ceiling.no-ip.org:8080');
?>