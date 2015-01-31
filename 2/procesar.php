<?php
	if($_POST['entrar']){

		$user=$_POST['username'];
		$passwd=$_POST['passwd'];
		
		if ($user == "Nacloud" & $passwd == "olaola") {
				setcookie("control", "1234", time()+30000,"/","www.nacloud.es");
				header ("Location: sitio.php");
			}
		else
			{
				header ("Location: error.html");
			}
	}
	else {
		echo "Error";
	}
?>