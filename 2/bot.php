<?php
	//Iniciar sesión y guardar cookies
	$parametros_post = 'username='.urlencode("Nacloud").'&passwd='.urlencode("olaola").'&entrar='.urlencode("Acceder");
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://www.nacloud.es/form/procesar.php');
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept-Language: es-es,en"));
	curl_setopt($ch, CURLOPT_POST,true);  
	curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros_post); 
	curl_setopt($ch, CURLOPT_HEADER, false);   
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);  
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
	
	//Guardar pagina
	$result = curl_exec($ch);
	$error = curl_error($ch);
	curl_close($ch);
	
	//Parsear
	preg_match_all("(<h1>(.*)</h1>)siU", $result, $matches1);
  
  	preg_match_all("(<h2>(.*)</h2>)siU", $result, $matches2);

  	preg_match_all("(<p>(.*)</p>)siU", $result, $matches3);
  
  	//Coger las variables de las listas
	$huno = $matches1[1][0];
	$hdos = $matches2[1][0];
	$parrafo = $matches3[1][0];

	//Mostrar resultados
	echo "Texto dentro del h1: " . $huno;
	echo "</br>Texto dentro del h2: " . $hdos;
	echo "</br>Texto dentro del p: " . $parrafo;
	
?>