<?php
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://www.youtube.com/user/NaCloudTutoriales/about');
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept-Language: es-es,en"));
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
	$error = curl_error($ch);
	curl_close($ch); 

	preg_match_all("(<span class=\"about-stat-value\">(.*)</span> suscriptores)siU", $result, $matches1);
	preg_match_all("(<span class=\"about-stat-value\">(.*)</span> reproducciones)", $result, $matches2);
	$suscribtores = $matches1[1][0];
	$reproduccionesvideo = $matches2[1][0];
	//echo "NaCloud Youtube:</br>";
	//echo "Suscriptors: " . $suscribtores;
	//echo "</br>Reproduccions de videos: " . $reproduccionesvideo;
	
?>
<style>
.container
{
	background: white;
	font-family: Helvetica;
	font-size: 19px;
	border-radius: 1em;
	box-shadow: 0px 5px 5px rgba(0,0,0,0.5);
	margin: 1em auto;
	padding: 1em;
	width: 25%;
}
</style>
<div class="container">
	<?="NaCloud Youtube:</br>"?>
	<?="Suscriptors: <b>" . $suscribtores.'</b>'?>
	<?="</br>Reproduccions de videos: <b>" . $reproduccionesvideo.'</b>'?>
</div>