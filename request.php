<?php

	$num = $_GET["num"];

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://xkcd.com/'.$num.'/info.0.json',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
	));

	$response = curl_exec($curl);

	curl_close($curl);

	echo $response;

?>