<html>
  <head>
    <Title>Consulta de Industria</Title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta charset = "utf-8">
	</head>
	<style>
	body, html{
          background-color:#38AF79;
	}
	</style>
  <body>
    <?PHP
        $hostname_localhost ="68.70.164.26";
        $database_localhost ="polizona_52";
        $username_localhost ="polizona_52";
        $password_localhost ="MiNumeroEs52";
        $json=array();
        
          $opcion = $_GET["option"];
          $conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
          $consulta = "select idempresa from empresa where idindustria = (select idindustria from empresa where idempresa = '52') and mercado = 'disenio';";
          $resultado = mysqli_query( $conexion, $consulta );
           
          if($conexion){
            echo "<table>";
            echo "<th> Empresa </th>";
            while($registro=mysqli_fetch_array($resultado)){
                $result["idempresa"]=$registro['idempresa'];
                $json['Clasificador'][]=$result;
                
                echo "<tr>";
                    echo "<td>".$registro['idempresa']." </td>";
                echo "</tr>";
            }
            
            echo "</tr>";
            echo "</tr>";
            echo "</table>";
            
            json_encode($json);
            mysqli_close($conexion);
        }
        else{
            echo "error";
        }		
		?>
  </body>
</html>
