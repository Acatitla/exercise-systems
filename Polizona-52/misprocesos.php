<html>
  <head>
    <Title>Mis procesos de negocio</Title>
  </head>
  <body>
    <!-- aquí recibes la respuesta del usuario y mandas llamar al proceso que sea necesario -->
    <?PHP
    $hostname_localhost ="68.70.164.26";
		$database_localhost ="polizona_mercado";
		$username_localhost ="polizona_estudiante";
		$password_localhost ="UPIICSAes#1";
    //$json=array();
    
      $opcion = $_GET["option"];
			$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
			//$consulta="select idempresa, idtipoalmacen, maximo from almacen;";
			//$consulta="select idalmacen, unidades, costoembarque from embarque where idempresa='52';";
      $consulta = "call sp_ConsultaClientes('".$opcion."')";
      $resultado = mysqli_query( $conexion, $consulta );

			if( $opcion = "A" ){
        echo "<center><table>";
        echo "Cargo a insumo A con abono a proveedores";
      } else {
        echo "error";
      }
      if ( $opcion = "B" ) {
        echo "<center><table>";
        echo "Cargo a insumo B con abono a proveedores";
      } else {
        echo "error";
      }
		?>
  </body>
</html>
