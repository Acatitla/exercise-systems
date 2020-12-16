<html>
<head>
		<Title>empresa individual de José Ángel Acatitla González </Title>
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
	<div class="container">
				<div class="row align-items-center">
					<div class="col-12 align-self-center text-center p-4">
						<h2>calcular:</h2>
						<!--
							var text = '{"actual":"function() {for( i in obj.costoembarque){ actual1 += +(obj.inventario[i].costo.unitario*obj.inventario[i].embarque.costounitario)}return actual1;}","inventario":[{"embarque":{"cantidad":2,"costounitario":10}},{"embarque":{"cantidad":2,"costounitario":1}},{"embarque":{"cantidad":2,"costounitario":4}},{"embarque":{"cantidad":3,"costounitario":2}},{"embarque":{"cantidad":2,"costounitario":2}}]}';
							var text = '{"actual":"function() {for( i in obj.inventario){ actual1 += +(obj.inventario[i].embarque.cantidad*obj.inventario[i].embarque.costounitario)}return actual1;}","inventario":[{"embarque":{"cantidad":2,"costounitario":10}},{"embarque":{"cantidad":2,"costounitario":1}},{"embarque":{"cantidad":2,"costounitario":4}},{"embarque":{"cantidad":3,"costounitario":2}},{"embarque":{"cantidad":2,"costounitario":2}}]}';
						<h3>valor total del inventario. Sumatoria de cantidad por costo unitario</h3>
						-->
						<h5>Ejemplo: Calcular el precio de Isan. </h5>
						<h6>el link es: https://rextester.com/BQP78803</h6>
						<h6>https://www.w3schools.com/code/tryit.asp?filename=GL2ZFXYH4FJC</h6>
						<br>
						<h3><p class="text-light bg-dark" id="demo"></p></h3>
						
						<!--
						<script>
						var actual1 = 0;
						var text = '{"actual":"function() {for( i in obj.inventario){ actual1 += +(obj.inventario[i].embarque.cantidad*obj.inventario[i].embarque.costounitario)}return actual1;}","inventario":[{"embarque":{"cantidad":2,"costounitario":10}},{"embarque":{"cantidad":2,"costounitario":1}},{"embarque":{"cantidad":2,"costounitario":4}},{"embarque":{"cantidad":3,"costounitario":2}},{"embarque":{"cantidad":2,"costounitario":2}}]}';
						var obj = JSON.parse(text);
						obj.actual = eval("(" + obj.actual + ")");
						document.getElementById("demo").innerHTML = obj.actual();
						</script>
						-->

						<script>
						var text = '{"isan":"function() {precio=299500;if(precio<28645201.02){isan=precio*0.02}else{if(precio<66666666668){isan=0;}else {}} return isan;}"}';
						var obj = JSON.parse(text);
						obj.isan = eval("(" + obj.isan + ")");
						document.getElementById("demo").innerHTML = obj.isan();
						</script>
						<br>
						
						<h2>Nuestro llamado a Base de datos:</h2>

						<br>

						<?PHP
							$hostname_localhost ="68.70.164.26";
							$database_localhost ="polizona_mercado";
							$username_localhost ="polizona_estudiante";
							$password_localhost ="UPIICSAes#1";
							$json=array();
										
								$opcion = $_GET["opciones"];
								$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
								//$consulta="select idempresa, idtipoalmacen, maximo from almacen;";
								$consulta="select idalmacen, unidades, costoembarque from embarque where idempresa='52';";
								$resultado=mysqli_query($conexion,$consulta);
								if($conexion){
									echo "<center><table>";
									echo "<th> Almacén</th>";
									echo "<th> Unidades </th>";
									echo "<th> Costo de Embarque </th>";
									while($registro=mysqli_fetch_array($resultado)){
										$result["idalmacen"]=$registro['idalmacen'];
										$result["unidades"]=$registro['unidades'];
										$result["costoembarque"]=$registro['costoembarque'];
										$json['Clasificador'][]=$result;
										
										echo "<tr>";
											echo "<td>".$registro['idalmacen']." </td>";
											echo "<td>".$registro['unidades']." </td>";
											echo "<td>".$registro['costoembarque']." </td>";
										echo "</tr>";
									}
									
									echo "</tr>";
									echo "</tr>";
									echo "</table></center>";
									
									echo json_encode($json, JSON_NUMERIC_CHECK);
									mysqli_close($conexion);
								}
								else{
									echo "error";
								}		
						?>
					</div>
				</div>	
			</div>
	</body>
</html>