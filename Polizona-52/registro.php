<?php
    //Credenciales para acceder a DB
   $hostname_localhost ="68.70.164.26";
   $database_localhost ="polizona_52";
   $username_localhost ="polizona_52";
   $password_localhost ="MiNumeroEs52";
   include("index.php"); 
    
   $legend = $_POST["legend"];
    //realiza conexion
    $conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
    if($legend == "asiento"){
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
      
        function Tabla ($result, $consulta) {
            if($consulta == NULL){
                echo "No tiene acceso a estos datos <br>";
            } else {
                if ($result != NULL) {
                    echo "Empresa: ".$result['idempresa']."<br> ";
                    echo "Asiento: ".$result['idasiento']."<br>";
                    echo "Fecha: ".$result['fecasiento']."<br>";
                    echo "Monto: ".$result['monto']."<br>";
                    echo "---------------------------------<br>";            
                }
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
    } else if ($id == "2"){
        if ($conexion) {
            echo "conexion exitosa. <br />";
               $idempresa= $_POST ['idempresa'];
               $idasiento= $_POST ['idasiento'];
               $idcargo= $_POST ['idcargo'];
               $idcuenta= $_POST ['idcuenta'];
               $monto= $_POST ['monto'];
         
            if ($_POST["idcargo"]!=""){
               $consulta="insert into cargo values ('$idempresa', '$idasiento', '$idcargo', '$idcuenta', '$monto');";
            } else {
               echo "Llene los campos requeridos <br>";
            }
            $registro=mysqli_query($conexion,$consulta);
                  
            if ($registro) {
               echo "Asiento almacenado. <br>";
            }
            else {
               echo "error en la ejecución del registro <br>";
            }
      }
            
      function Tabla ($result, $consulta) {
         if($consulta == NULL){
            echo "No tiene acceso a estos datos <br>";
         } else {
            if ($result != null ) {
               echo "Empresa: ".$result['idempresa']."<br> ";
               echo "Asiento: ".$result['idasiento']."<br>";
               echo "Cargo: ".$result['idcargo']."<br>";
               echo "Cuenta: ".$result['idcuenta']."<br>";
               echo "Monto: ".$result['monto']."<br>";
               echo "-------------------------------<br>";
            }
         }
      }
      $link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
      mysqli_select_db($link, $database_localhost);
      $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
      $result = mysqli_query($link, "SELECT * FROM cargo");
      while ($fila = mysqli_fetch_array($result)){
         Tabla($fila);
      }
      mysqli_free_result($result);
      mysqli_close($link); 
    }else if ($id=="3"){
        if ($conexion) {
            echo "conexion exitosa. <br />";
            $idempresa= $_POST ['idempresa'];
            $idasiento= $_POST ['idasiento'];
            $idabono= $_POST ['idabono'];
            $idcuenta= $_POST ['idcuenta'];
            $monto= $_POST ['monto'];
            
            if ($_POST["idabono"]!==""){
                $consulta="insert into abono values ('$idempresa', '$idasiento', '$idabono', '$idcuenta', '$monto');";
            } else {
                echo "Llene los campos requeridos <br>";
            }
    
            $registro=mysqli_query($conexion,$consulta);
            //Confirmacion
            if ($registro) {
                echo "Asiento almacenado. <br>";
            } else {
                echo "error en la ejecución del registro <br>";
            }
        }
    
        function Tabla ($result, $consulta) {
            if($consulta == NULL){
                echo "No tiene acceso a los datos <br>";
            } else {
                if ($result !== NULL) {
                    echo "Empresa: ".$result['idempresa']."<br> ";
                    echo "Asiento: ".$result['idasiento']."<br>";
                    echo "Abono: ".$result['idabono']."<br>";
                    echo "Cuenta: ".$result['idcuenta']."<br>";
                    echo "Monto: ".$result['monto']."<br>";
                    echo "--------------------------------<br>";
                }
            }
        } 
        $link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
        mysqli_select_db($link, $database_localhost);
        $tildes = $link->query("SET NAMES 'utf8'"); 
        $result = mysqli_query($link, "SELECT * FROM abono");
        while ($fila = mysqli_fetch_array($result)){
            Tabla($fila);
        }
        mysqli_free_result($result);
        mysqli_close($link); 
    } else {
        mysqli_close($conexion);
    }
?>