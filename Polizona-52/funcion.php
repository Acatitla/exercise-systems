<html>
<body>
<h2>calcular valor total del inventario. sumatoria de cantidad por costo unitario</h2>

<p id="demo"></p>

<script>var actual1 =0;
var text = '{"actual":"function() {for( i in obj.inventario){ actual1 += +(obj.inventario[i].embarque.cantidad*obj.inventario[i].embarque.costounitario)}return actual1;}","inventario":[{"embarque":{"cantidad":2,"costounitario":10}},{"embarque":{"cantidad":2,"costounitario":1}},{"embarque":{"cantidad":2,"costounitario":4}},{"embarque":{"cantidad":3,"costounitario":2}},{"embarque":{"cantidad":2,"costounitario":2}}]}';
//var text = '{"actual":"function() {for( i in obj.costoembarque){ actual1 += +(obj.inventario[i].costo.unitario*obj.inventario[i].embarque.costounitario)}return actual1;}","inventario":[{"embarque":{"cantidad":2,"costounitario":10}},{"embarque":{"cantidad":2,"costounitario":1}},{"embarque":{"cantidad":2,"costounitario":4}},{"embarque":{"cantidad":3,"costounitario":2}},{"embarque":{"cantidad":2,"costounitario":2}}]}';
//var text = '{"actual":"function() {for( i in obj.inventario){ actual1 += +(obj.inventario[i].embarque.cantidad*obj.inventario[i].embarque.costounitario)}return actual1;}","inventario":[{"embarque":{"cantidad":2,"costounitario":10}},{"embarque":{"cantidad":2,"costounitario":1}},{"embarque":{"cantidad":2,"costounitario":4}},{"embarque":{"cantidad":3,"costounitario":2}},{"embarque":{"cantidad":2,"costounitario":2}}]}';
var obj = JSON.parse(text);
obj.actual = eval("(" + obj.actual + ")");
document.getElementById("demo").innerHTML = obj.actual();
</script>

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
			echo "<table>";
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
			
			echo "</table>";
			
			echo json_encode($json);
			mysqli_close($conexion);
		}
		else{
			echo "error";
		}
		
			
?>

</body>
</html>