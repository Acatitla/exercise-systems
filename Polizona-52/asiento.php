<?php
    //Credenciales para acceder a DB
   $hostname_localhost ="68.70.164.26";
   $database_localhost ="polizona_52";
   $username_localhost ="polizona_52";
   $password_localhost ="MiNumeroEs52";
   include("index.php"); 
    
    //realiza conexion
    $conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
        
        if ($conexion) {
            $idempresa= $_POST ['idempresa'];
            $idasiento= $_POST ['idasiento'];
            $monto= $_POST ['monto'];
            
            //Bloquear registros vacios
            if ($_POST["idempresa"]!==""){
                //registro a DB
               $consulta="insert into asiento values ('$idempresa','$idasiento', now(),'$monto')";
            } else {
               echo "Llene los campos requeridos <br>";
            }
            $registro=mysqli_query($conexion,$consulta);
                //Confirmacion
               if ($registro) {
                 echo "Asiento almacenado. <br>";
               }
            else {
               echo "error en la ejecución del registro <br>";
            }
        }
      
        function Tabla ($result) {
            if ($result !== NULL) {
                echo "Empresa: ".$result['idempresa']."<br> ";
                echo "Asiento: ".$result['idasiento']."<br>";
                echo "Fecha: ".$result['fecasiento']."<br>";
                echo "Monto: ".$result['monto']."<br>";
                echo "---------------------------------<br>";            
            }
        }
        $link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
        mysqli_select_db($link, $database_localhost);
        $tildes = $link->query("SET NAMES 'utf8'"); 
        $result = mysqli_query($link, "SELECT * FROM asiento");
        while ($fila = mysqli_fetch_array($result)){
            Tabla($fila);
        }
        mysqli_free_result($result);
        mysqli_close($link); 
?>