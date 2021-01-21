<?php //devuelve el número de suscriptores de un canal de youtube

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://www.youtube.com/user/NaCloudTutoriales');  //url de donde secaremos los datos
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; NSIE 5.01; Windows NT 5.0)');
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Aceppt-Languaje: es-es,en"));
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	//Guardamos página
	$result = curl_exec($ch);  //guarda la página en HTML en $result
	$error = curl_error($ch);
	curl_close($ch);

	//Parseamos
	preg_match_all("(<span class=\"stat-value\">(.*)</span>
	<span class=\"stat-name\">suscriptores</span>)siU", $result, $matches1); //va a leer lo que haya en (.*)
	//preg_match_all busca esta cadena en $result, y que guarde lo que coincida en $matches1

	// echo $matches1[0][0];
	// echo $matches1[1][1];
	// echo $matches1[1][0];
	// echo $matches1[1][1];

	$suscriptores = $matches1[1][0];

	echo $suscriptores;

 ?>
